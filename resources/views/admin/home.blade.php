@extends('admin.layouts.app')
@section('content')
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-header">
<div class="page-header-title">
<h4>{{ widget(1)->extra_field_1 }}</h4>
</div>
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{url('/admin')}}">
<i class="icofont icofont-home"></i>
</a>
</li>
<li class="breadcrumb-item">{{__('Dashboard')}}
</li>
<li class="breadcrumb-item">{{ widget(1)->extra_field_1 }}
</li>
</ul>
</div>
</div>
<div class="page-body">

	
<ul class="row dashnav">
<li class="col-lg-3 col-md-4 col-6"> <a href="{{url('/admin/home')}}" class="waves-effect waves-light"><i class="ti-dashboard"></i><span> {{__('Dashboard')}} </span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.admins')}}" class="waves-effect waves-light"><i class="ti-blackboard"></i><span>{{__('Admin')}}</span></a> </li>

<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','services')}}" class="waves-effect waves-light"><i class="ti-package"></i><span> {{__('Services')}} </span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','cms-pages')}}" class="waves-effect waves-light"><i class="ti-desktop"></i><span> {{__('Site Pages')}} </span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','contact-us-messages')}}" class="waves-effect waves-light"><i class="ti-email"></i>
	@if(messages_count())
     <strong>{{messages_count()}}</strong>
    @endif	
	<span>{{__('New Message')}}(s)</span>
	
	</a>
	</li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','portfolio')}}" class="waves-effect waves-light"><i class="ti-layout-list-thumb-alt"></i><span>{{__('Portfolio')}}</span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','payments')}}" class="waves-effect waves-light"><i class="ti-gallery"></i><span>{{__('Payments')}}</span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','blogs')}}" class="waves-effect waves-light"><i class="ti-layout-grid2"></i><span>{{__('Blog')}}</span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','faqs')}}" class="waves-effect waves-light"><i class="ti-pencil-alt"></i><span>{{__('FAQs')}}</span></a> </li>
<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.menus')}}" class="waves-effect waves-light"><i class="ti-menu-alt"></i><span>{{__('Site Menus')}}</span></a> </li>
	<li class="col-lg-3 col-md-4 col-6"> <a href="{{route('admin.modules.data','testimonials')}}" class="waves-effect waves-light"><i class="ti-menu-alt"></i><span>{{__('Testimonials')}}</span></a> </li>

	
<li class="col-lg-3 col-md-4 col-6"> <a href="{{ route('admin.logout') }}" class="waves-effect waves-light"><i class="ti-user"></i><span>{{__('Logout')}}</span></a> </li>
</ul>
	
	
	
	
</div>
</div>

	
</div>
</div>
</div>
@endsection
@push('js')
<script type="text/javascript" src="{{asset('admin/assets/pages/dashboard/ecommerce-dashboard.js')}}"></script>
@endpush