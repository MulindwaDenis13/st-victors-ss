@extends('layouts.app')

@section('content')
   <section class="page-title-area">
	<div class="container">
		<div class="page-title">
		<div class="row">
			<div class="col-lg-8">                    
				<h3 class="title">{{__('Technologies We Work With')}}</h3>                   
			</div>				
			<div class="col-lg-4">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('Technologies')}}</li>
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
        <ul class="techlist">
              @if(null!==(module(21)))
              @foreach(module(21) as $technolgy)              
              <li><img src="{{asset('images/'.$technolgy->image)}}" alt="{{$technolgy->title}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$technolgy->title}}"></li> 
                @endforeach
                @endif
            </ul>
         
  </div>
</section>
<!-- Inner Heading End -->
 

@endsection
