@extends('layouts.app')
@section('content')
<!-- Inner Heading Start -->
<section class="page-title-area">
    <div class="container">
		<div class="page-title">
        <div class="row">
            <div class="col-lg-6">
                
                    <h3 class="title">@if(isset(request()->keyword))
                             {{request()->keyword}}
                             @else
                             Blog
                             @endif</h3>
                    
                   
                </div>
			<div class="col-lg-6">
			 <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@if(isset(request()->keyword))
                             {{request()->keyword}}
                             @else
                             Blog
                             @endif
                           </li>
                        </ol>
                    </nav>
            </div>
            </div>
        </div> <!-- row -->
    </div>
</section>


<!-- Inner Heading End --> 
<!-- Inner Content Start -->

<section class="innerPages blogWrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-12">
         <div class="row">
          @if(null!==($blogs))
          @foreach($blogs as $blog)
           <div class="col-lg-6">
              <div class="post">
                  <div class="post-image"> <img class="img-fluid" src="{{asset('images/thumb/'.$blog->image)}}" alt=""> </div>
                  <div class="post-desc">
                      <div class="date">{{date('d',strtotime($blog->created_at))}}<span>{{date('M',strtotime($blog->created_at))}}</span></div>
                      <div class="post-title">
                          <h4><a href="{{route('blogs.detail',$blog->slug)}}">{{$blog->title}}</a></h4>
                      </div>
                      <p>{!!\Illuminate\Support\Str::limit(strip_tags($blog->description), 90, '...')!!}</p>
                      <a href="{{route('blogs.detail',$blog->slug)}}" class="primary-btn btn">Read More<i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
          @endforeach
          @endif
    </div>




<div class="row">
                        <div class="col-12">
                            <ul class="custom pagination justify-content-center mt-4 mb-md-80">@if(isset($blogs) && count($blogs))
                  {{ $blogs->appends(request()->query())->links() }}
                  @endif</ul>
                        </div>
                    </div>
      </div>
      <aside class="col-lg-4">
                    <div class="sidebar">
                        <div class="widget search-widget mb-xl-30">
                            <h5 class="widget-title">{{__('Search')}}</h5>
                            <form action="{{route('blogs.list')}}">
                                <input type="text" name="keyword" placeholder="Search your keyword...">
                                <button type="submit"><i class="fas fa-search"></i> </button>
                            </form>
                        </div>
                         @if(null!==($recent_data)) 
                        <div class="widget popular-feeds mb-xl-30">
                            <h5 class="widget-title">{{__('Popular Feeds')}}</h5>
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
@endsection