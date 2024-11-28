@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<section class="page-title-area">
	<div class="container">
		<div class="page-title">
		<div class="row">
			<div class="col-lg-6">
				
					<h3 class="title">{{__('Contact Us')}}</h3>					
				
			</div>
			<div class="col-lg-6">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('Contact Us')}}</li>
					</ol>
				</nav>
			</div>
			</div>
		</div> <!-- row -->
	</div>
</section>
<!-- Inner Heading End --> 
  <section class="innerPages">
  <div class="container">
    <div class="row">
     
      <div class="col-lg-7 col-md-12 md-mt-5">
        <div class="contact-inner white-bg">
          <div class="section-title">
            @if(session()->has('message.added'))
              <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <strong>Task Done!</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
            <p>Get in touch and let us know how we can help. Fill out the form and we'll be in touch as soon as possible.</p>
          </div>
          <form id="contact-form" method="post" action="{{route('contact.post')}}">
            @csrf
            <div class="messages"></div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_name" type="text" name="first_name" class="form-control" placeholder="{{__('First Name')}}" required="required" data-error="Firstname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="{{__('Last Name')}}" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_email" type="email" name="email_address" class="form-control" placeholder="{{__('Email')}}" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input id="form_phone" type="tel" name="phone_number" class="form-control" placeholder="{{__('Phone')}}" required="required" data-error="Phone is required">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <textarea id="form_message" name="message" class="form-control" placeholder="{{__('Message')}}" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12 mt-2">
                <button type="submit" class="primary-btn btn">{{__('Send Message')}}</button>
              </div>
            </div>
          </form>
        </div>
      </div>
	 <div class="col-lg-5 col-md-12">
	
		  
        <ul class="contact-media list-unstyled">
          <li class="media"> <i class="fas fa-map-marker-alt"></i>
            <div class="media-body">
              <h5>{{__('Address')}}</h5>
              <p>{{widget(1)->extra_field_4}}</p>
            </div>
          </li>
          <li class="media"><i class="far fa-envelope"></i>
            <div class="media-body">
              <h5>{{__('Email')}}</h5>
              <a href="mailto:{{widget(1)->extra_field_3}}">{{widget(1)->extra_field_3}}</a>
            </div>
          </li>
          <li class="media"><i class="fas fa-phone-alt"></i>
            <div class="media-body">
              <h5>{{__('Phone')}}</h5>
              <a href="tel:{{widget(1)->extra_field_2}}">{{widget(1)->extra_field_2}}</a>
            </div>
          </li>
        </ul>
      </div>
		
    </div>
  </div>
</section>
@endsection
@push('js')
<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>


@endpush
