@extends('admin.layouts.main')

@section('title','Crear Usuario')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrar Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cts" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="cts" type="text" class="form-control{{ $errors->has('cts') ? ' is-invalid' : '' }}" name="cts" value="{{ old('cts') }}" required autofocus>

                                @if ($errors->has('cts'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cts') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="tipo" class="col-md-4 col-form-label text-md-right">{{ __('Tipo') }}</label>

                            <div class="col-md-6">
                                <select id="tipo" name="tipo" class="form-control{{ $errors->has('tipo') ? ' is-invalid' : '' }}" required autofocus>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                                @if ($errors->has('tipo'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tipo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <select id="estado" name="estado" class="form-control{{ $errors->has('estado') ? ' is-invalid' : '' }}" required autofocus>
                                    <option value="activo">Activo</option>
                                    <option value="inactivo">Inactivo</option>
                                </select>
                                @if ($errors->has('estado'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('estado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="idSede" class="col-md-4 col-form-label text-md-right">{{ __('Sede') }}</label>
                            <div class="col-md-6">
                                <select id="idSede" class="form-control{{ $errors->has('idSede') ? ' is-invalid' : '' }}"  name="idSede" required autofocus>
                                    @if(count($sedes) > 0)
                                        @foreach($sedes as $sede)
                                        <option value="{{ $sede->id }}">{{ $sede->nombre }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @if ($errors->has('idSede'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('idSede') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="idPerfil" class="col-md-4 col-form-label text-md-right">{{ __('Perfil') }}</label>
                            <div class="col-md-6">
                                <select id="idPerfil" class="form-control{{ $errors->has('idPerfil') ? ' is-invalid' : '' }}"  name="idPerfil" required autofocus>
                                    @if(count($perfils) > 0)
                                        @foreach( $perfils as $perfil)
                                        <option value="{{ $perfil->id }}">{{ $perfil->nombre }}</option>
                                        @endforeach
                                    @endif
                                </select>

                                @if ($errors->has('idPerfil'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('idPerfil') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
