<?php

namespace Modules\Contact\Http\Controllers\Main;

use App\Models\Boardmember;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Modules\Contact\Emails\ContactformRequestMailer;
use Modules\Contact\Emails\ContactformRespondMailer;
use Modules\Contact\Entities\Models\Main\ContactCategorie;
use Modules\Contact\Entities\Models\Main\ContactMessages;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
    	$president		=	static::get_president();
    	$vice_president	=	static::get_vice_president();
    	$secretary		=	static::get_secretary();
    	$treasurer		=	static::get_treasurer();
    	$subjects		=	static::get_subjects();



    	return view('contact::main.index')
			->with(compact('president',
							'vice_president',
							'secretary',
							'treasurer',
							'subjects'
				));
    }

	public function send_contact_email(Request $request){

    	// check for spammer

//		static::check_for_spam($request);

    	// Check if agree with general conditions
		static::checked_general_conditions($request->contact_general_conditions);

    	// Validate incoming request
		static::validate_request($request->all());

		// Set all other variables
		$other	=	static::get_other_mail_details($request->contact_subject);

		// Put in Database
		$web_id = static::store_message($request, $other);

		// Send requester an email that message is received
    	Mail::send(new ContactformRespondMailer($request, $other, $web_id));

		// Send organisation mail about new message
		Mail::send(new ContactformRequestMailer($request, $other, $web_id));

		// All finished. Now go back with a success message
//		return redirect(route('main.contact.index'))->with('success', 'contact_form_email_success');

		return response()->json(['success'=>['message'=>Lang::get('contact::main/lang.contact_form_email_success')]]);



	}

	public function received_email(){
    	return 'Hier zie je de ontvangen email in een webversie';
	}

	private function store_message($request, $other){

		$messages = new ContactMessages;

		$messages->senders_name 	= $request->contact_name;

		$messages->senders_email 	= $request->contact_email;

		$messages->senders_ip 		= $request->ip();

		$messages->c_categorie_id 	= $request->contact_subject;

		$messages->senders_question = $request->contact_question;

		$messages->send_on 			= Carbon::now();

		$messages->save();


		$message_id 				= $messages->id;


		$web_id 					= Carbon::now()->format('Ymd').$message_id;

		$messages->web_id			= $web_id;

		$messages->save();


		return $web_id;

	}



	private function get_president(){

    	$president = 	Boardmember::where('boardmember_title', '=', 'president')->first();

    	return $president;
	}

	private function get_vice_president(){

    	$vice_president = 	Boardmember::where('boardmember_title', '=', 'vice-president')->first();

    	return $vice_president;
	}

	private function get_secretary(){

    	$secretary 	=	Boardmember::where('boardmember_title', '=', 'secretary')->first();

    	return $secretary;
	}

	private function get_treasurer(){

    	$treasurer = Boardmember::where('boardmember_title', '=', 'treasurer')->first();

    	return $treasurer;
	}

	private function get_subjects(){

    	$subjects = ContactCategorie::where('publisher_approve', '=', 1)
									->orderBy('web_order')
									->get();

    	return $subjects;
	}

	private function get_current_date_time(){

		$mytime = Carbon::now();

    	return $mytime->format('H:i:s d-m-Y');
	}

	private function get_contact_subject($subject_id){

		$contact_categorie =new ContactCategorie();

		return $contact_categorie->where('id', '=', $subject_id)->first();

	}

	private function get_organisation_email($contact_subject){


    	return $contact_subject->emails()->where('main_email', '=', 1)->first();

	}

	private function get_other_mail_details($subject_id){


		$contact_subject = static::get_contact_subject($subject_id);


		$organisation_email = static::get_organisation_email($contact_subject);

		$other	=	[
			'mail_from' 			=> $organisation_email,
			'mail_subject' 			=> $contact_subject->description,
			'contact_subject' 		=> $contact_subject->name,
			'contact_date_time' 	=> static::get_current_date_time(),

		];

    	return $other;
	}


	private function validate_request($request){

		$validator = \Validator::make($request, [
			'contact_name' => 'required|max:255',
			'contact_email' => 'required|email',
			'contact_subject' => 'required|integer',
			'contact_question' => 'required',
			'contact_general_conditions' => 'required|boolean',
		]);

		if ($validator->fails())
			{
				return response()->json(['errors'=>$validator->errors()->all()]);
			}

		return true;
	}

	private function checked_general_conditions($checked){

		if(!isset($checked)){

			return response()->json(['errors'=>'contact_form_not_agreed']);
//			return redirect()->back()->with('danger', 'contact_form_not_agreed');
		}

		return true;
	}

	private function check_for_spam($request){

    	$visitor_ip = $request->ip();

    	$spammer = ContactMessages::where('senders_ip', '=', $visitor_ip)
									->where('created_at', '>=', Carbon::now()->subMinutes(5)->toDateTimeString())
									->first();

    	if($spammer){

//			die(response()->json(['errors'=>['message'=>Lang::get('contact::main/lang.contact_form_welcome_spammer')]],422));

			return(response()->json(['errors'=>['message'=>Lang::get('contact::main/lang.contact_form_welcome_spammer')]]));
//			die(response()->json(['errors'=>['message'=>'error test']]));


		}

    	return true;
	}

}
