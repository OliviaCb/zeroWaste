@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

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
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
						
						                     <div class="row mb-3">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

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
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>

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
                            <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                            <div class="col-md-6">
						<input id="birthday" type="date" max="<?php echo date("Y-m-d"); ?>" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

						@error('birthday')
						<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
						</span>
@enderror
                            </div>
                        </div>
						
 <div class="form-group row ">
                                <div class="col-md-12">
                                    <label for="gender" class= "col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                            <div class="form-check form-check-inline" >
                                <input class="form-check-input" type="radio" name="gender" value="male">
                                <label class="form-check-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>                            
							<div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="other">
                                <label class="form-check-label" for="other">Other</label>
                            </div>
                                </div>




                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
