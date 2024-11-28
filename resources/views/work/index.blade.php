@extends('layouts.app')
@section('content')
<section class="page-title-area">
  <div class="container">
	  <div class="page-title">
    <div class="row">
      <div class="col-lg-6">
        
          <h3 class="title">{{__('Our Works')}}</h3>
          
        </div>
      
	<div class="col-lg-6">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{__('Our Works')}}</li>
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
      @if(null!==($works))
      @foreach($works as $work)
      
        <div class="col-lg-4">
                    <div class="gallery-item-content">
                        <div class="item-thumbnail"><img src="{{asset('images/'.$work->image)}}" alt="">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="links"> <a href="{{route('work.detail',$work->slug)}}"> <i class="fas fa-long-arrow-alt-right"></i> </a> <a class="img-popup image-preview" href="{{asset('images/'.$work->image)}}"> <i class="fas fa-search"></i> </a> </div>
                                    <?php 
                                      if($work->category_ids){
                                            $cate_ids = explode(",", $work->category_ids);
                                            $categories = App\Models\ModulesData::whereIn('id', $cate_ids)->get();

                                          $cate_array = array();
                                          foreach ($categories as $cat) {
                                              $cate_array[] = $cat->title;
                                          }
                                          
                                        }

                                     ?>
                                    <div class="info">
                                        <p class="tag">{{implode(' | ', $cate_array)}}</p>
                                        <h4 class="project-name">{{$work->title}}</h4>
                                    </div>
                                </div>
                            </div>
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