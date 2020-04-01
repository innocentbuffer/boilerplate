@extends('frontend.layouts.appforms')

@section('title')
    BlueSparroew Reset Password
@endsection

@section('content')
    <div class="loginsection">
        <div class="row h-100 mx-0">
            <div class="col-md-4 offset-md-4 bg-white pl-4">
                <div class="card border-0 setpasswordform">
                    <div class="card-header border-0 bg-white d-flex justify-content-center">
                        <a class="text-white" href="{{ url('/') }}">
                            <img src="{{env('APP_URL')}}/images/logo/bslogo.png" alt="bluesparrow logo"><span class="logoname-color ">{{ config('app.name', 'BlueSparrow') }}</span>
                        </a>
                    </div>

                    <div class="card border-0">

                        <div class="card-body">

                            @if(session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            {{ html()->form('POST', route('frontend.auth.password.reset'))->class('form-horizontal')->open() }}
                                {{ html()->hidden('token', $token) }}

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">

                                            {{ html()->email('email')
                                                ->class('form-control')
                                                ->class('mt-2')
                                                ->placeholder(__('validation.attributes.frontend.email'))
                                                ->attribute('maxlength', 191)
                                                ->required() }}
                                        </div><!--form-group-->
                                    </div><!--col-->
                                </div><!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">

                                            {{ html()->password('password')
                                                ->class('form-control')
                                                ->class('mt-2')
                                                ->placeholder(__('validation.attributes.frontend.password'))
                                                ->required() }}
                                        </div><!--form-group-->
                                    </div><!--col-->
                                </div><!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">

                                            {{ html()->password('password_confirmation')
                                                ->class('form-control')
                                                ->class('mt-2')
                                                ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                                ->required() }}
                                        </div><!--form-group-->
                                    </div><!--col-->
                                </div><!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-0 clearfix">
                                            {{ form_submit(__('labels.frontend.passwords.reset_password_button')) ->class('py-2')
                                                ->class('mt-2')
                                                ->class('start-journey-setpassword')
                                                ->class('w-100')
                                                ->class('text-center') }}
                                        </div><!--form-group-->
                                    </div><!--col-->
                                </div><!--row-->
                            {{ html()->form()->close() }}
                        </div><!-- card-body -->
                    </div><!-- card -->
                </div>
            </div>
        </div>
    </div>
@endsection