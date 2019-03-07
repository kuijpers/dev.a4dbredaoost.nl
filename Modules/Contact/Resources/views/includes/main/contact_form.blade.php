
{{--{{$subjects}}--}}

<div class="alert alert-success contact_form" style="display:none"></div>

<div class="alert alert-danger contact_form" style="display:none"></div>


<h2 class="text-success">@lang('contact::main/lang.contact_form_title')</h2>
<form class="form-horizontal" method="POST" action="{{route('main.contact.mail')}}" id="contact_form">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
        <label for="contact_name" class="col-md-6 control-label">@lang('contact::main/lang.contact_form_name')</label>
        <div class="col-md-12">
{{-- Contact name--}}
            <input id="contact_name" type="text" class="form-control" name="contact_name" value="{{ old('contact_name') }}" required autofocus>

            @if ($errors->has('contact_name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
        <label for="contact_email" class="col-md-6 control-label">@lang('contact::main/lang.contact_form_email')</label>

        <div class="col-md-12">
{{--Contact email--}}
            <input id="contact_email" type="email" class="form-control" name="contact_email" value="{{ old('contact_email') }}" required>

            @if ($errors->has('contact_email'))
                <span class="help-block">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contact_subject') ? ' has-error' : '' }}">
        <label for="contact_subject" class="col-md-6 control-label">@lang('contact::main/lang.contact_form_what_subject')</label>

        <div class="col-md-12">
            <div class="custom-select">
{{-- Contact subject--}}
                <select id="contact_subject" name="contact_subject">
                    <option selected disabled value="">@lang('contact::main/lang.contact_form_select_subject')</option>
                    @foreach($subjects as $subject)

                        <option value="{{$subject->id}}">{{$subject->name}}</option>

                    @endforeach
                </select>
            </div>
        </div>
    </div>


    <div class="form-group{{ $errors->has('contact_question') ? ' has-error' : '' }}">
        <label for="contact_question" class="col-md-6 control-label">@lang('contact::main/lang.contact_form_what_question')</label>

        <div class="col-md-12">
{{--Contact question--}}
                <textarea id="contact_question" class="form-control" name="contact_question" required>{{ old('contact_question') }}</textarea>

            @if ($errors->has('contact_question'))
                <span class="help-block">
                                        <strong>{{ $errors->first('contact_question') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-check">
{{-- Contact agree with conditions--}}
        <input type="checkbox" class="form-check-input" id="contact_agreement" name="contact_general_conditions" value="1">
        <label class="form-check-label" for="agreement">@lang('contact::main/lang.contact_form_agree_with')
            <a data-toggle="modal" href="#general_conditions" class="text-success">@lang('contact::main/lang.contact_form_general_conditions')</a>
        </label>
    </div>

    <div class="form-group">
        <button id="submit_button" type="submit" class="btn btn-success disabled">@lang('contact::main/lang.contact_form_button_send')</button>
    </div>
</form>