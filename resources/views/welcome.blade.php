@extends('layouts.app')
@section('content')

@if(widget(1)->radio_button_1 == 1)
    <!-- Slider Section -->
    <div class="tp-banner-container" id="slider">
        <div class="tp-banner">
            <ul>
                @if(null !== (module(1)))
                            @foreach(module(1) as $slider) 
                                        <!-- <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="{{asset('images/'.$slider->image)}}">
                                    <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280" data-speed="600" data-start="1000">{{$slider->title}}</div>
                                    <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310" data-speed="600" data-start="1600">{{$slider->extra_field_1}}</div>
                                    <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="380" data-speed="600" data-start="2200"><a href="{!!($slider->extra_field_3)!!}" class="section-btn">{{$slider->extra_field_2}}</a></div>
                                  </li> -->
                                        <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"
                                            style="background: url('{{ asset('images/' . $slider->image) }}') no-repeat center; background-size: cover;">
                                            <div class="caption lfb large-title tp-resizeme slidertext2" data-x="center" data-y="280"
                                                data-speed="600" data-start="1000">
                                                {{$slider->title}}
                                            </div>
                                            <div class="caption lfb large-title tp-resizeme slidertext1" data-x="center" data-y="310"
                                                data-speed="600" data-start="1600">
                                                {{$slider->extra_field_1}}
                                            </div>
                                            <div class="caption lfb large-title tp-resizeme sliderbtn" data-x="center" data-y="380" data-speed="600"
                                                data-start="2200">
                                                <a href="{!!($slider->extra_field_3)!!}" class="section-btn">{{$slider->extra_field_2}}</a>
                                            </div>
                                        </li>
                            @endforeach
                @endif
            </ul>
        </div>
    </div>
    <!-- Slider End -->
@else
    <div class="slider-wrap"
        style="background: url('{{ asset('images/' . widget(16)->extra_image_2) }}') no-repeat center; background-size: cover;">
        <div class="container">
            <div class="banner_info wow fadeInUp" data-wow-duration="2s">
                <h1>{{widget(16)->extra_field_1}}</h1>
                <h2>{{widget(16)->extra_field_2}}</h2>
                <p>{!!widget(16)->extra_field_3!!}</p>
                <a href="{{url('/contact-us')}}" class="btn btn-primary mt-3">{{widget(16)->extra_field_4}}</a>
            </div>
        </div>
    </div>

@endif

<!-- About Start -->
<section class="aboutWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img"><img src="{{asset('images/' . widget(17)->extra_image_1)}}" alt=""></div>
            </div>

            <div class="col-lg-6">
                <div class="section-title">

                    @if(Auth::guard('admin')->user())
                        <div class="edit_option">
                            <a target="_blank" href="{{route('admin.widgets_data', widgetPage(17)->slug)}}#widget_17"><i
                                    class="fas fa-edit"></i></a>
                        </div>
                    @endif

                    <h2>{!!widget(17)->extra_field_1!!}</h2>
                    <p>{{widget(17)->description}}</p>
                </div>
                <ul class="core-features">
                    <li>
                        <div class="aboutIconImg"><img src="{{asset('images/about-icon1.png')}}" /></div>
                        <div class="aboutContent">
                            <h4>{{widget(17)->extra_field_2}}</h4>
                            <p>{{widget(17)->extra_field_3}}</p>
                        </div>
                    </li>
                    <li>
                        <div class="aboutIconImg"><img src="{{asset('images/about-icon2.png')}}" /></div>
                        <div class="aboutContent">
                            <h4>{{widget(17)->extra_field_4}}</h4>
                            <p>{{widget(17)->extra_field_5}}</p>
                        </div>
                    </li>
                    <li>
                        <div class="aboutIconImg"><img src="{{asset('images/about-icon3.png')}}" /></div>
                        <div class="aboutContent">
                            <h4>{{widget(17)->extra_field_6}}</h4>
                            <p>{{widget(17)->extra_field_7}}</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>

<!-- Services Start -->
<section class="servieWrap">
    <div class="container">
        <div class="section-title">

            @if(Auth::guard('admin')->user())
                <div class="edit_option">
                    <a target="_blank" href="{{route('admin.widgets_data', widgetPage(18)->slug)}}#widget_18"><i
                            class="fas fa-edit"></i></a>
                </div>
            @endif

            <h2><span>{{widget(18)->extra_field_1}}</span>{{widget(18)->extra_field_2}}</h2>
            <p>{!!widget(18)->extra_field_3!!}</p>
        </div>
        <div class="homeservices row">
            @if(module(14))
                @foreach(module(14, 6) as $service)
                    <div class="col-lg-4 text-center">

                        <div class="service-box">
                            <div class="serviceimage"><img src="{{asset('images/thumb/' . $service->image)}}"></div>
                            <div class="details">
                                <h4><a href="{{route('services.detail', $service->slug)}}">{{$service->title}}</a></h4>
                                <p>{!!\Illuminate\Support\Str::limit(strip_tags($service->description), 100, '...')!!}</p>
                                <a href="{{route('services.detail', $service->slug)}}" class="btn-primary btn"><i
                                        class="fas fa-plus-circle"></i> {{__('View Details')}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
</section>

<!-- Why Choose us Start -->
<section class="featureWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                @if(Auth::guard('admin')->user())
                    <a target="_blank" href="{{route('admin.widgets_data', widgetPage(19)->slug)}}#widget_19"><i
                            class="fas fa-edit"></i></a>
                @endif
            </div>
            <h5>{{widget(19)->extra_field_1}}</h5>
            <h2>{{widget(19)->extra_field_2}}</h2>
            <p>{{widget(19)->extra_field_3}}</p>
        </div>

        <ul class="core-features row">
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-users"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_4}}</h4>
                    <p>{{widget(19)->extra_field_5}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-lightbulb"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_6}}</h4>
                    <p>{{widget(19)->extra_field_7}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-laptop"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_8}}</h4>
                    <p>{{widget(19)->extra_field_9}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-mobile-alt"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_10}}</h4>
                    <p>{{widget(19)->extra_field_11}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="far fa-calendar-check"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_12}}</h4>
                    <p>{{widget(19)->extra_field_13}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-phone-alt"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_14}}</h4>
                    <p>{{widget(19)->extra_field_15}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-tags"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_16}}</h4>
                    <p>{{widget(19)->extra_field_17}}</p>
                </div>
            </li>
            <li class="col-lg-3 col-md-6">
                <div class="aboutIconImg"><i class="fas fa-people-carry"></i></div>
                <div class="aboutContent">
                    <h4>{{widget(19)->extra_field_18}}</h4>
                    <p>{{widget(19)->extra_field_19}}</p>
                </div>
            </li>
        </ul>

    </div>
</section>





<!-- <div class="section industriesbg">
    <div class="container wow fadeInUp" data-wow-duration="2s">
        <div class="section-title">
            <h5>Best IT Service</h5>
            <h2>Industries We Serve</h2>
            <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm ipsumm recreo that dolocons.</p>
        </div>

        <div class="row">
            @if(module(20))
            @foreach(module(20,12) as $industry)
            <div class="col-lg-2 col-md-3 col-6">
                <div class="indsbox">
                    <div class="indico"><img src="{{asset('images/'.$industry->image)}}" alt="{{$industry->title}}"></div>
                    <h3>{{$industry->title}}</h3>
                </div>
            </div>
            @endforeach   
            @endif 

        </div>

        <div class="text-center mt-5">
            <a href="{{url('/industries')}}" class="btn btn-primary">View All Industries</a>
        </div>


        </div>
</div> -->




<!-- Technologies start -->
<!-- <div class="section wow fadeInUp" data-wow-duration="2s">
         <div class="container">
            <div class="section-title">
               <h2>Technologies We Work With</h2>
               <p>Grursus mal suada faci lisis lorem ipsum dolarorit more ame ion consectetur elit vesti at bulum nec odio aea the dumm ipsumm recreo that dolocons.</p>
            </div>

            <ul class="techlist">
                @if(module(21))
                @foreach(module(21,16) as $technolgy)
                    <li><img src="{{asset('images/'.$technolgy->image)}}" alt="{{$technolgy->title}}" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$technolgy->title}}"></li> 
                @endforeach   
                @endif                    
            </ul>

            <div class="text-center mt-5">
            <a href="{{url('/technologies')}}" class="btn btn-primary">View All Technologies</a>
            </div>

         </div>
      </div> -->
<!-- Technologies end -->




<!-- Fun Fatcs Start -->
<section class="counterWrap">
    <div class="edit_option">
        @if(Auth::guard('admin')->user())
            <a target="_blank" href="{{route('admin.widgets_data', widgetPage(21)->slug)}}#widget_21"><i
                    class="fas fa-edit"></i></a>
        @endif
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-3">
                <div class="counter">
                    <h3>{{widget(21)->extra_field_1}}</h3>
                    <h2 class="timer count-title count-number" data-to="{{widget(21)->extra_field_2}}"
                        data-speed="1500"></h2>
                    <p class="count-text ">{{widget(21)->extra_field_3}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3>{{widget(21)->extra_field_4}}</h3>
                    <h2 class="timer count-title count-number" data-to="{{widget(21)->extra_field_5}}"
                        data-speed="1500"></h2>
                    <p class="count-text ">{{widget(21)->extra_field_6}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3>{{widget(21)->extra_field_7}}</h3>
                    <h2 class="timer count-title count-number" data-to="{{widget(21)->extra_field_8}}"
                        data-speed="1500"></h2>
                    <p class="count-text ">{{widget(21)->extra_field_9}}</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="counter">
                    <h3>{{widget(21)->extra_field_10}}</h3>
                    <h2 class="timer count-title count-number" data-to="{{widget(21)->extra_field_11}}"
                        data-speed="1500"></h2>
                    <p class="count-text ">{{widget(21)->extra_field_12}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Work Start -->
<!-- <section class="workWrap">
        <div class="container">
            <div class="section-title">
              <div class="edit_option">
                @if(Auth::guard('admin')->user())
                <a target="_blank" href="{{route('admin.widgets_data',widgetPage(23)->slug)}}#widget_23"><i class="fas fa-edit"></i></a>
                @endif
              </div>
                <h5>{{widget(23)->extra_field_1}}</h5>
                <h2>{{widget(23)->extra_field_2}}</h2>
            </div>
            <div class="row">
              @if(module(17))
              @foreach(module(17,6) as $work)
              <div class="col-lg-4">
                    <div class="gallery-item-content">
                        <div class="item-thumbnail"><img src="{{asset('images/'.$work->image)}}" alt="">
                            <div class="content-overlay">
                                <div class="content">
                                    <div class="links"> <a href="{{route('work.detail',$work->slug)}}"> <i class="fas fa-long-arrow-alt-right"></i> </a> <a class="img-popup image-preview" href="{{asset('images/'.$work->image)}}"> <i class="fas fa-search"></i> </a> </div>
                                    <?php 
                                      if ($work->category_ids) {
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
            <div class="text-center mt-4"><a href="{{url('/our-work')}}" class="btn-primary">View All Work</a></div>
        </div>
    </section> -->

<!-- Contact Start -->
<section class="thinkWrap">
    <div class="container">
        <div class="edit_option">
            @if(Auth::guard('admin')->user())
                <a target="_blank" href="{{route('admin.widgets_data', widgetPage(20)->slug)}}#widget_20"><i
                        class="fas fa-edit"></i></a>
            @endif
        </div>
        <h2>{!!widget(20)->extra_field_1!!}</h2>
        <p>{{widget(20)->extra_field_2}}</p>
        <a href="{{url('contact-us')}}" class="btn-primary">{{widget(20)->extra_field_3}}</a>
    </div>
</section>

<!-- Testimonials Start -->
<div class="testimonialsWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                @if(Auth::guard('admin')->user())
                    <a target="_blank" href="{{route('admin.widgets_data', widgetPage(22)->slug)}}#widget_22"><i
                            class="fas fa-edit"></i></a>
                @endif
            </div>
            <p>{{widget(22)->extra_field_1}}</p>
            <h2>{{widget(22)->extra_field_2}}</h2>
        </div>
        <ul class="owl-carousel testimonials">
            @if(module(5))
                @foreach(module(5) as $testimonial)
                    <li class="item">

                        <div class="testiBox">
                            <div class="quote"><img src="{{asset('images/quote.png')}}" alt="Quotes"></div>
                            <p>{{(strip_tags($testimonial->description))}}</p>
                            <div class="ratingStars">
                                <ul>
                                    <?php        if ($testimonial->extra_field_2 == 5) {?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <?php        } else if ($testimonial->extra_field_2 == 4) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 3) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 2) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 1) { ?>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } else if ($testimonial->extra_field_2 == 0) { ?>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <li><i class="far fa-star"></i></li>
                                    <?php            } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="avatar"><img src="{{asset('images/' . $testimonial->image)}}" alt="{{$testimonial->title}}">
                        </div>
                        <div class="author">{{$testimonial->title}}<span
                                class="destination">{{$testimonial->extra_field_1}}</span></div>

                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</div>

<!-- Blog Start -->
<section class="blogWrap">
    <div class="container">
        <div class="section-title">
            <div class="edit_option">
                @if(Auth::guard('admin')->user())
                    <a target="_blank" href="{{route('admin.widgets_data', widgetPage(24)->slug)}}#widget_24"><i
                            class="fas fa-edit"></i></a>
                @endif
            </div>
            <p>{{widget(24)->extra_field_1}}</p>
            <h2>{{widget(24)->extra_field_2}}</h2>
        </div>
        <div class="row">
            @if(module(9))
                @foreach(module(9) as $blog)
                    <div class="col-lg-4">
                        <div class="post">
                            <div class="post-image"> <img class="img-fluid" src="{{asset('images/thumb/' . $blog->image)}}"
                                    alt=""> </div>
                            <div class="post-desc">
                                <div class="date">
                                    {{date('d', strtotime($blog->created_at))}}<span>{{date('M', strtotime($blog->created_at))}}</span>
                                </div>
                                <div class="post-title">
                                    <h4><a href="#">{{$blog->title}}</a></h4>
                                </div>
                                <p>{!!\Illuminate\Support\Str::limit(strip_tags($blog->description), 90, '...')!!}</p>
                                <a href="{{route('blogs.detail', $blog->slug)}}" class="primary-btn btn">Read More<i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
@endsection