@extends('layouts.app')

@section('content')

    <section id="contact" class="home-section color-dark bg-gray ">
        <div class="container marginbot-50">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div >
                        <div class="section-heading text-center">
                            <h2 class="h-bold ">Iniciar Sesión</h2>
                            <div class="divider-header"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container " style="margin:center; text-align: center;">
            <div class="row marginbot-50" >
                <div class="col-md-10 col-md-offset-2" style="margin: center;">
                    <form id="contact-form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf
                        <div class="row marginbot-20">
                        <div class="col-md-1 "></div>
                        <div class="col-md-2 "><a href="">Correo</a> </div>
                            <div class="col-md-5 xs-marginbot-20">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row " style="align-content: center;">
                        <div class="col-md-1 "></div>
                        <div class="col-md-2 xs-marginbot-20 ">
                        <a href="">Contraseña</a> 
                        </div>
                            <div class="col-md-5 xs-marginbot-20 ">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="row text-center" style="padding-top:20px;" >
                        <div class="col-md-9 xs-marginbot-20 ">
                        <button type="submit" class="btn btn-skin btn-lg btn-block" style="width: 120px;" > {{ __('Login') }}</button>
                        </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </section>

@endsection
