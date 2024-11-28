@extends('admin.layouts.auth')

@section('content')
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
        <!-- Container-fluid starts -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
					
					@if(session()->has('message.added'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{__('Task Done!')}}</strong> {!! session('message.content') !!}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
					
                    <!-- Authentication card start -->
                    <div class="login-card card-block auth-body">
                         <form class="md-float-material" method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                            <div class="text-center">
                                <img class="logo-dark" src="{{asset('images/'.widget(1)->extra_image_1)}}" alt="">
                            </div>
                            <div class="auth-box">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-left txt-primary">{{__('Sign In')}}</h3>
                                    </div>
                                </div>
                                <hr/>
                                <div class="input-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                   
                                </div>
                                <div class="input-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-sm-7 col-xs-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">{{__('Remember me')}}</span>
                                            </label>
                                        </div>
                                    </div>
                                    @if (Route::has('admin.password.request'))
                                    <div class="col-sm-5 col-xs-12 forgot-phone text-right">
                                        <a href="{{ route('admin.password.request') }}" class="text-right f-w-600 text-inverse"> {{__('Forgot Your Password')}}?</a>
                                    </div>
                                   
                                    @endif
                                    
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">{{__('Sign in')}}</button>
                                    </div>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">{{__('Thank you and enjoy our website')}}.</p>
                                        <p class="text-inverse text-left"><b>{{__('Your Autentification Team')}}</b></p>
                                    </div>
                                    <div class="col-md-2">
                                      
                                    </div>
                                </div>

                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>

@endsection

