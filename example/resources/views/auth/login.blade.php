@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/jakis.css') }}" />
            <div class="logowanie" style="padding-top:100px">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-5"><img src="{{asset('uploads/recipes/Lunch Break_Isometric.png')}}" alt="" srcset=""></div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">{{ __('Logowanie do aplikacji') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-4">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adres E-Mail') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Hasło') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Zapamiętaj mnie') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-dark btn-lg">
                                                {{ __('Zaloguj') }}
                                            </button>

                                            <a class="btn btn-link" href="{{ url('forget-password')}}">
                                                {{ __('Zapomniałem hasła') }}
                                            </a>

                                        </div>
                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            @endsection