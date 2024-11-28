@extends('layouts.app')
@section('content')
<section class="page-title-area">
  <div class="container">
	   <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
       
          <h3 class="title">{{__('Services')}} </h3>          
          
       
      </div>
	<div class="col-lg-6">	
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{__('Services')}}</li>
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
    	
	  
     <div class="service-grids row clearfix">
      @if(null!==($services))
      @foreach($services as $service)
		<div class="col-lg-4 col-md-6">
		<div class="servimg"><img src="{{asset('images/thumb/'.$service->image)}}"></div>
        <div class="grid">          
          <h3><a href="{{route('services.detail',$service->slug)}}">{{$service->title}}</a></h3>
          <p>{!!\Illuminate\Support\Str::limit(strip_tags($service->description), 100, '...')!!}</p>
        </div>
		</div>
      @endforeach
      @endif
     </div>
     
     
  </div>
</section>
<!-- Inner Heading End --> 
@endsection