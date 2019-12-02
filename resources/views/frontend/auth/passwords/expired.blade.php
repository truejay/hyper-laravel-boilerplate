@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.passwords.expired_password_box_title'))

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
                        <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Your password has expired.</h4>
                        <p class="text-muted mb-4">You must reset your password for security reasons.</p>
                    </div>
                    {{ html()->form('PATCH', route('frontend.auth.password.expired.update'))->class('form-horizontal')->open() }}
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.frontend.old_password'))->for('old_password') }}

                            {{ html()->password('old_password')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.old_password'))
                                ->required() }}
                        </div>
                        <div class="form-group">
                            {{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}

                            {{ html()->password('password')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.password'))
                                ->required() }}
                        </div>
                        <div class="form-group mb-3">
                            {{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}

                            {{ html()->password('password_confirmation')
                                ->class('form-control')
                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                ->required() }}
                        </div>
                        <div class="form-group mb-0 text-center">
                            {{ form_submit(__('labels.frontend.passwords.update_password_button')) }}
                        </div>
                    {{ html()->form()->close() }}
                </div> <!-- end card-body -->
            </div>
        </div> <!-- end col -->
    </div>
@endsection
