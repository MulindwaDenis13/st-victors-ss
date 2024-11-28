@extends('layouts.app')
@section('content')
<section class="page-title-area">
  <div class="container">
	   <div class="page-title">
    <div class="row">
      <div class="col-lg-6">       
          <h3 class="title">{!!$cms->title!!}</h3>        
      </div>
	<div class="col-lg-6">	
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{!!$cms->title!!}</li>
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
    
	  <p>{!!$cms->description!!}</p>
	  
	  
     <div class="row clearfix mt-5">
      @if(null!==($packages))
      @foreach($packages as $price)
         <div class="col-lg-4 col-md-6">
						<div class="plan-style-3 orange-shadow">
							<div class="plan-header">
								<h3>{{$price->title}}</h3>
								<p class="price">$<span class="price-digit">{{$price->extra_field_1}}</span>/year</p>
							</div>
							<div class="plan-detail">
								<ul>
									<li>{{$price->extra_field_2}} {{__('Storage')}}</li>
									<li>{{$price->extra_field_3}} <b>{{__('Bandwidth')}}</b></li>
									<li>{{$price->extra_field_4}} {{__('SQL Database for website')}}</li>
									<li>{{$price->extra_field_5}} {{__('Email Account')}}</li>
									<li>{{$price->extra_field_6}} {{__('Domain')}}</li>
									<li>{{$price->extra_field_8}} {{__('Website')}}</li>
									<li>{{$price->extra_field_9}} {{__('Pages')}}</li>
									<li>{{$price->extra_field_10}} {{__('Ecommerce')}}</li>
									<li>{{$price->extra_field_7}} {{__('Technical Support')}}</li>
								</ul>
							</div>
							<!-- Plan Bottom -->
							<div class="plan-bottom">
								<a class="btn-primary" href="{{url('contact-us')}}">{{__('Get Started')}}</a>
							</div>
						</div>
					</div>
      @endforeach
      @endif
     </div>
     
     
  </div>
</section>
<!-- Inner Heading End --> 
@endsection