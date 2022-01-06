@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/jakis.css') }}" />
<div class="rejestracja">
    <div class="row align-items-center justify-content-center">
   
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Zarejestruj nowego użytkownika') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nick użytkownika') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Adres E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Potwierdź hasło') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

						                     <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Imię') }}</label>

                            <div class="col-md-6">
						<input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

						@error('firstname')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
@enderror
                            </div>
                        </div>
					                     <div class="row mb-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Nazwisko') }}</label>

                            <div class="col-md-6">
						<input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

						@error('surname')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
@enderror
                            </div>
                        </div>


											                     <div class="row mb-3">
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Data urodzenia') }}</label>

                            <div class="col-md-6">
						<input id="birthday" type="date" min="<?php echo date('Y-m-d', strtotime('-150 year')); ?>" max="<?php echo date("Y-m-d"); ?>" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

						@error('birthday')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
@enderror
                            </div>
                        </div>

 <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Płeć') }}</label>
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label" for="male">Mężczyzna</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="female">Kobieta</label>
                            </div>
							<div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="other">
                                <label class="form-check-label" for="other">Inna</label>
                            </div>
                                </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark btn-lg">
                                    {{ __('Zarejestruj') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5"><img src="{{asset('uploads/recipes/Chef_Isometric.png')}}"alt="" srcset=""></div>
</div>
@endsection
