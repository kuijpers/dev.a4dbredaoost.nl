<?php

	// Used to send to member of foundation


namespace Modules\Contact\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactformRequestMailer extends Mailable
{
    use Queueable, SerializesModels;

	protected $request;
	protected $other;
	protected $web_id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
	public function __construct($request, $other, $web_id)
	{
		$this->request = $request;

		$this->other = $other;

		$this->web_id = $web_id;
	}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
		return $this->from($this->other['mail_from'])
					->to($this->request->contact_email)
					->subject($this->other['mail_subject'])
					->view('contact::emails.ContactformRequest')
					->with([
						'contact_name' 		=> $this->request->contact_name,
						'contact_question' 	=> $this->request->contact_question,
						'contact_subject' 	=> $this->other['contact_subject'],
						'contact_date_time'	=> $this->other['contact_date_time'],
						'web_id'			=> $this->web_id,

					]);
    }
}
