@extends('frontend.layouts.plain')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.reset_password_box_title'))

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
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="text-center w-75 m-auto">
                        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Reset Password</h4>
                        <p class="text-muted mb-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                    </div>
                    {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                        <div class="form-group mb-3">
                            {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                            {{ html()->email('email')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.email'))
                                ->attribute('maxlength', 191)
                                ->required()
                                ->autofocus() }}
                        </div>
                        <div class="form-group mb-0 text-center">
                            {{ form_submit(__('labels.frontend.passwords.send_password_reset_link_button')) }}
                        </div>
                    {{ html()->form()->close() }}
                </div> <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="row mt-3">
                <div class="col-12 text-center">
                    <p class="text-muted">Back to <a href="{{ route('frontend.auth.login') }}" class="text-muted ml-1"><b>Log In</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div> <!-- end col -->
    </div>
@endsection
