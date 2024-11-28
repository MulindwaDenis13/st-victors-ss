@extends('layouts.app')

@section('content')
<!-- Inner Heading Start -->
<section class="page-title-area">
  <div class="container">
	  <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
        
          <h3 class="title">{{$cms->title}}</h3>
          
       
      </div>
		<div class="col-lg-6">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$cms->title}}</li>
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
    <div class="row">
      <div class="col-lg-7 col-md-12">
        <div class="post-desc">           
      		<p>{!!$cms->description!!}</p>
        </div>
      </div>
      <aside class="col-lg-5">
		  @if($cms->image!='' && null!==($cms->image))
          <div class="about__img"><img src="{{asset('images/'.$cms->image)}}" class="d-block w-100" /></div>
          @endif
		  
		  <div class="callWrp">

<div class="getquoteBx">
	<img src="{{url('/images/support-icon.svg')}}" alt="{{__('Contact Us')}}">
<h4>{{__('Contact us for more information or to start a project with us')}}.</h4>
<a href="{{url('contact-us')}}" class="qtbtn">{{__('Contact Us')}}</a>
</div>




</div>
		  
		  
      </aside>
    </div>
  </div>
</section>



@endsection



