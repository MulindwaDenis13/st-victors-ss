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
    
        <div class="featuredWrapp">
        <p>{!!$cms->description!!}</p>       
        
          <div id="accordionExample" class="accordion">
            @if($features)
            @php
            $count = 1;
            @endphp
            @foreach($features as $feature)
            <div class="card">
              <div id="heading{{$count}}" class="card-header bg-white shadow-sm border-0">
                <h2 class="mb-0">
                  @if($count==1)
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$count}}" aria-expanded="true" aria-controls="collapseOne" class="btn btn-link text-dark font-weight-bold text-uppercase collapsible-link">{{$feature->title}}</button>
                  @else
                  <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$count}}" aria-expanded="false" aria-controls="collapseTwo" class="btn btn-link collapsed text-dark font-weight-bold text-uppercase collapsible-link">{{$feature->title}}</button>
                  @endif
                </h2>
              </div>
              <div id="collapse{{$count}}" aria-labelledby="heading{{$count}}" data-bs-parent="#accordionExample" class="collapse @if($count==1) show @else hide @endif">
                <div class="card-body p-3">
                  <p class="font-weight-light m-0">{!!$feature->description!!}</p>
                </div>
              </div>
            </div>
             @php
            $count ++;
            @endphp
            @endforeach
            @endif
          </div>
          <!-- End --> 
          
        </div>
     
  </div>
</section>



@endsection


