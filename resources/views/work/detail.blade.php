@extends('layouts.app')
@section('content')
<section class="page-title-area">
  <div class="container">
	 <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
       
          <h3 class="title">{{__('Project Detail')}}</h3>          
         
        </div>
      
		
	<div class="col-lg-6">
		 <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{$work->title}}</li>
            </ol>
          </nav>
	 </div>	
    </div></div>
    <!-- row --> 
  </div>
</section>
<section class="innerPages blogWrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
        <div class="singpageWrap">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
     @if($work->images!='')  
        <?php $images = explode(',', $work->images); ?>
        @if(null!==($images))
        <?php $count = 1; ?>
        @foreach($images as $img)
          <div class="carousel-item @if($count==1) active @endif"><a href="{{asset('images/'.$img)}}" class="img-popup image-preview"><img src="{{asset('images/'.$img)}}" alt="" /></a></div>
          <?php $count++; ?>
        @endforeach
        @endif
        @endif

   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">{{__('Previous')}}</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">{{__('Next')}}</span>
  </a>
</div>
 
             
	 <div class="workdetails">
                            <h5 class="widget-title">{{__('About Project')}} </h5>
                            <div class="projinfo"> <strong>{{__('Project Name')}}: </strong> <span>{{$work->title}}</span> </div>
		 
		 
                            <div class="projinfo"> <strong>{{__('Website Design')}}: </strong> <span class="url">{!!$work->extra_field_1!!}</span> </div>
                            <?php 
                $cate_ids = explode(",", $work->category_ids);
                $categories = App\Models\ModulesData::whereIn('id', $cate_ids)->where('status','active')->get();

              $cate_array = array();
              foreach ($categories as $cat) {
                  $cate_array[] = "<span>$cat->title</span>";
              }  
            ?>

<div class="projinfo doservice"> <strong>{{__('Services')}}:</strong> {!!implode(PHP_EOL,$cate_array)!!} </div>
                            
<div class="projinfo"> <strong>Tools:</strong> {!!str_replace(',', "\n\r", $work->extra_field_2)!!} </div>
                            <?php $parsed = parse_url($work->extra_field_1);
if (empty($parsed['scheme'])) {
    $urlStr = 'http://' . ltrim($work->extra_field_1, '/');
}else{
     $urlStr = $work->extra_field_1;
}
?>
 <div class="projbtn"> <a class="primary-btn btn" href="{!!$urlStr!!}" target="_blank">{{__('Visit Project Website')}}</a> </div>

                        </div>
			
			
			
       <div class="projdetails">
		<h1>Project Description</h1>
		   <p>{!!$work->description!!}</p>
	  </div>
	  
      </div>
 
      </div>
      <aside class="col-lg-4">
                    <div class="sidebar">
                       

<div class="widget search-widget mb-xl-30 clientcmnt">
<h5 class="widget-title">{{__('Client Feedback')}}</h5>
<img src="{{asset('images/'.detail($work->extra_field_3)->image)}}" alt="">

{!!detail($work->extra_field_3)->description!!}

<div class="clientint"><strong>{!!detail($work->extra_field_3)->title!!}</strong><br>{!!detail($work->extra_field_3)->extra_field_1!!}</div>

                        </div>




 
                        <div class="widget social-widget mb-xl-30">
                            <h5 class="widget-title">{{__('Follow Us')}}</h5>
                            <ul class="custom-flex">
                               <li><a href="{{widget(12)->extra_field_1}}" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                      <li><a href="{{widget(12)->extra_field_2}}" target="_blank"><i class="fab fa-twitter-square"></i></a></li>
                      <li><a href="{{widget(12)->extra_field_3}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                      <li><a href="{{widget(12)->extra_field_4}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                          
                       
                    </div>
                </aside>
    </div>
  </div>
</section>



@endsection