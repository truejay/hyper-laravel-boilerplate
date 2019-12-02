@extends('frontend.layouts.plain')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card">
                <!-- Logo -->
                <div class="card-header pt-4 pb-4 text-center bg-primary">
                    <a href="index.html">
                        <span><img src="/img/frontend/logo.png" alt="" height="18"></span>
                    </a>
                </div>
                <div class="card-body p-4">
                    <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign In</h4>
                        <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                    </div>
                    {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                            {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.email'))
                                ->attribute('maxlength', 191)
                                ->required() }}
                        </div>
                        <div class="form-group">
                            <a href="{{ route('frontend.auth.password.reset') }}" class="text-muted float-right"><small>@lang('labels.frontend.passwords.forgot_password')</small></a>
                            {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                            {{ html()->password('password')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.password'))
                                ->required() }}
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-checkbox">
                                {{ html()->checkbox('remember', true, 1)->id('remember')->class('custom-control-input') }}
                                {{ html()->label(__('labels.frontend.auth.remember_me'))->class('custom-control-label')->for('remember') }}
                            </div>
                        </div>
                        @if(config('access.captcha.login'))
                            <div class="form-group mb-3 text-center">
                                @captcha
                                {{ html()->hidden('captcha_status', 'true') }}
                            </div>
                        @endif
                        <div class="form-group mb-0 text-center">
                            {{ form_submit(__('labels.frontend.auth.login_button')) }}
                        </div>
                    {{ html()->form()->close() }}
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="{{ route('frontend.auth.register') }}" class="text-muted ml-1"><b>Sign Up</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- end col -->
    </div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
