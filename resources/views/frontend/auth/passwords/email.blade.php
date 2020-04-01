@extends('frontend.layouts.appforms')

@section('title')
    BlueSparroew Email link
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

                            {{ html()->form('POST', route('frontend.auth.password.email.post'))->open() }}
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">

                                            {{ html()->email('email')
                                                ->class('form-control')
                                                ->placeholder(__('validation.attributes.frontend.email'))
                                                ->attribute('maxlength', 191)
                                                ->class('mt-2')
                                                ->required()
                                                ->autofocus() }}
                                        </div><!--form-group-->
                                    </div><!--col-->
                                </div><!--row-->

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group mb-0 clearfix">
                                            {{ form_submit(__('labels.frontend.passwords.send_password_reset_link_button'))->class('start-journey-setpassword')
                                                ->class('py-2')
                                                ->class('mt-2')
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