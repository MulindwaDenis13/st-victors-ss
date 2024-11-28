@extends('layouts.app')

@section('content')
   <section class="page-title-area">
	<div class="container">
		<div class="page-title">
		<div class="row">
			<div class="col-lg-6">                    
				<h3 class="title">{{__('Industries We Serve')}}</h3>                   
			</div>				
			<div class="col-lg-6">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('Industries')}}</li>
					</ol>
				</nav>
			</div>
		</div>
		</div>
				<!-- row -->
        </div>
    </section>
    <section class="innerPages">
  <div class="container">
            <div class="row">
              @if(null!==(module(20)))
              @foreach(module(20) as $industry)
              <div class="col-lg-2 col-md-3 col-6">
                <div class="indsbox">
                    <div class="indico"><img src="{{asset('images/'.$industry->image)}}" alt="{{$industry->title}}"></div>
                    <h3>{{$industry->title}}</h3>
                </div>
                </div>
                @endforeach
                @endif
            </div>
         
  </div>
</section>
<!-- Inner Heading End -->
 

@endsection
