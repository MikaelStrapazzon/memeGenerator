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

    <div class="row justify-content-center align-items-center">
        <div class="col-md-8 " >

            <div class="card">

            <div class="card-header">

            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>

            </div>



                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="name_field">
                            <img class="user-icon" src= "{{asset('images/user_icon.png') }}"width="30" height="30" alt="Your Image">
                        <div class="row mb-3 pb-3">

                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <div class="name_input">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="width: 180px; height: 30px;">

                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="email_field">
                            <img class="mail-icon" src= "{{asset('images/email_icon.png') }}"width="30" height="30" alt="Your Image">
                        <div class="row mb-3 pb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  style="width: 180px; height: 30px;" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>


                        <div class="password_field">
                            <img class="pass-icon" src= "{{asset('images/password_icon.png') }}"width="30" height="30" alt="Your Image">
                        <div class="row mb-3 pb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"  style="width: 180px; height: 30px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        </div>

                        <div class="row mb-3 pb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirme Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  style="width: 180px; height: 30px;">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary fw-bold px-3 shadow">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="card card-register">
                    <div class="card-header card-header-register">
                        <div class="circle-register"></div>
                        <div class="circle-register"></div>
                        <div class="circle-register"></div>
                    </div>
                    <div class="card-body card-body-register">
                        <p>Já tem conta? <a href="{{ route('login') }}">Faça o login aqui</a></p>
                    </div>
                </div>
            </div>
        </div>

@endsection
