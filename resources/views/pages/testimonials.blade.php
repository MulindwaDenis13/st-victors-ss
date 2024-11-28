@extends('layouts.app')

@section('content')
   <section class="page-title-area">
	<div class="container">
		<div class="page-title">
		<div class="row">
			<div class="col-lg-6">                    
				<h3 class="title">{{__('Testimonials')}}</h3>                   
			</div>				
			<div class="col-lg-6">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{url('/')}}">{{__('Home')}}</a></li>
						<li class="breadcrumb-item active" aria-current="page">{{__('Testimonials')}}</li>
					</ol>
				</nav>
			</div>
		</div>
		</div>
				<!-- row -->
        </div>
    </section>
    <section class="innerPages testimonialsWrap">
  <div class="container">
            <ul class="">
              @if(null!==(module(5)))
              @foreach(module(5) as $testimoinial)
              <li class="item">
                    <div class="testimonials_sec">
                        <div class="client_box">
							 <div class="clientImg"><img alt="" src="{{asset('images/thumb/'.$testimoinial->image)}}"></div>
                            <div class="authorDetail">
                                <h3>{{$testimoinial->title}} <span>{{$testimoinial->extra_field_1}}</span></h3>
                                <ul class="unorderList starWrp">
                                    <?php if($testimoinial->extra_field_2 == 5){?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2 == 4){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2 == 3){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==2){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==1){ ?>
                                      <li><i class="fas fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php }else if($testimoinial->extra_field_2==0){ ?>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                      <li><i class="far fa-star"></i></li>
                                  <?php } ?>
                                </ul>
                            </div>
                           
                        </div>
                        {!!$testimoinial->description!!}
                    </div>
                </li>
                @endforeach
                @endif
            </ul>
         
  </div>
</section>
<!-- Inner Heading End -->
 

@endsection
