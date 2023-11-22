@extends('layouts.app')


@section('content')

@vite(['resources/sass/_register&login.scss'])

<div class="container">

    <style>

        body {

            background-image: url('images/background_4.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;


          }
          </style>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="bottom: -280px">

            <div class="card-header">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>

            </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if($errors->any())
                        @foreach($errors->all() as $error)
                            <span class="d-block invalid-feedback fw-bold" role="alert">
                                {{$error}}
                            </span>
                        @endforeach
                    @endif

                    <div class="email_field">
                        <img class="mail-icon" src= "{{asset('images/email_icon.png') }}"width="30" height="30" alt="Your Image">
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email"
                                type="email"
                                name="email"
                                class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                required autofocus />


                            </div>
                        </div>
                    </div>

                    <div class="password_field">
                        <img class="pass-icon" src= "{{asset('images/password_icon.png') }}"width="30" height="30" alt="Your Image">
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input
                                id="password"
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                autocomplete="current-password"
                                required
                                />


                            </div>
                        </div>
                    </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembre-se de mim') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary fw-bold px-3 shadow">
                                    {{ __('Entrar') }}
                                </button>




                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="card card-login">
                <div class="card-header card-header-login">
                    <div class="circle-login"></div>
                    <div class="circle-login"></div>
                    <div class="circle-login"></div>
                </div>
                <div class="card-body card-body-login">
                    <p>Não tem conta? <a href="{{ route('register') }}">Cadastre-se aqui</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
