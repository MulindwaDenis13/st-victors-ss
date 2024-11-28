@extends('layouts.app')
@section('content')
<section class="page-title-area">
  <div class="container">
	  <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
        
          <h3 class="title">{{$service->title}}</h3>
          
        
      </div>
		<div class="col-lg-6">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$service->title}}</li>
            </ol>
          </nav>
		</div>
		
    </div>
		  </div>
    <!-- row --> 
  </div>
</section>

<section class="innerPages blogWrap">
  <div class="container">
    
    <div class="service_details">
<div class="row">
<div class="col-lg-7">

<p>{!!$service->description!!}
</p>

</div>

<div class="col-lg-5">
<div class="service_del_img"><img src="{{asset('images/'.$service->image)}}"></div>

<div class="callWrp">

<div class="getquoteBx">
	<img src="{{url('/images/support-icon.svg')}}" alt="{{__('Contact Us')}}">
<h4>{{__('Contact us for more information or to start a project with us')}}.</h4>
<a href="{{url('contact-us')}}" class="qtbtn">{{__('Contact Us')}}</a>

</div>




</div>
	
</div>

</div>


</div>
    
  </div>
</section>
<!-- Inner Content Start -->

<!-- Inner Content Start --> 
<!-- Inner Content Start --> 
@endsection