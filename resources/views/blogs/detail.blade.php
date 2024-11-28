@extends('layouts.app')
@section('content')

<section class="page-title-area">
        <div class="container">
			<div class="page-title">
            <div class="row">
                <div class="col-lg-6">
                    
                        <h3 class="title">{{__('Blog')}}</h3>                        
                   
                </div>
				<div class="col-lg-6">
                   <nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
							<li class="breadcrumb-item active" aria-current="page">{{__('Blog')}}</li>
						</ol>
					</nav>
                </div>
            </div> <!-- row -->
			 </div>
        </div>
    </section>
<section class="innerPages blogWrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
         <div class="blog-post">
            <div class="post-image">
              <img class="img-fluid" src="{{asset('images/'.$blog->image)}}" alt="">
            </div>
            <div class="post-desc">
              <div class="post-meta">
                <ul class="list-inline">
                  <li><i class="la la-calendar mr-1"></i> {{date('jS F  Y', strtotime($blog->created_at))}}</li>
                  <li><i class="la la-user mr-1"></i> {{__('By Admin')}}</li>
                </ul>
              </div>
              <div class="post-title">
                <h2>{{$blog->title}}</h2>
              </div>
              <p class="lead">{!!$blog->description!!}</p>
             
             

             

              
            </div>
          </div>
    
            
         
      </div>
    <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget search-widget mb-xl-30">
                            <h5 class="widget-title">{{__('Search')}}</h5>
                            <form action="{{route('blogs.list')}}">
                                <input type="text" name="keyword" placeholder="{{__('Search your keyword')}}...">
                                <button type="submit"><i class="fas fa-search"></i> </button>
                            </form>
                        </div>
                         @if(null!==($recent_data)) 
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title">Popular Feeds</h5>
                            <div class="popular-feed-loop">
                              @foreach($recent_data as $recent)
                              <div class="single-popular-feed">
                                    <div class="feed-img animate-img">
                                        <a href="news-detail.html">
                                            <img src="{{asset('images/thumb/'.$recent->image)}}" class="image-fit" alt="{{$recent->title}}">
                                        </a>
                                    </div>
                                    <div class="feed-desc">
                                        <h6 class="post-title"><a href="{{route('blogs.detail',$recent->slug)}}">{{$recent->title}}</a></h6>
                                        <span class="time"><i class="far fa-calendar-alt"></i> {{date('jS F  Y', strtotime($recent->created_at))}}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                         @if(null!==(module(8))) 
                        <div class="widget categories-widget mb-xl-30">
                            <h5 class="widget-title">{{__('Categories')}}</h5>
                            <ul class="custom">
                              @foreach(module(8) as $cate)
                              <?php 
                               $count = App\Models\ModulesData::where('module_id',9)->whereRaw("FIND_IN_SET($cate->id,category_ids)")->where('status','active')->count();
                                ?>
                                <li>
                                    <a href="{{route('blogs.list','cate='.$cate->id)}}">{{$cate->title}}<span>{{$count}}</span></a>
                                </li>
                              @endforeach  
                                
                            </ul>
                        </div>
                        @endif
                          
                       
                    </div>
                </aside>
    </div>
  </div>
</section>
<!-- Inner Heading End --> 
@endsection