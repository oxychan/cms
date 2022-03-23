@extends('layouts.master')

@section('container')

<div class="main">
    <div class="shop_top">
       <div class="container">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                    <div class="register-top-grid">
                            <h3>PERSONAL INFORMATION</h3>
                            <div>
                                <span>{{ __('Username') }}<label>*</label></span>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus> 
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <span>{{ __('Name') }}<label>*</label></span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>
                                <span>{{ __('Email Address') }}<label>*</label></span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> 
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="clear"> </div>
                                <a class="news-letter" href="#">
                                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                                </a>
                            <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    <div class="register-bottom-grid">
                            <h3>LOGIN INFORMATION</h3>
                            <div>
                                <span>{{ __('Password') }}<label>*</label></span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div>
                                <span>{{ __('Confirm Password') }}<label>*</label></span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                            </div>
                            <div class="clear"> </div>
                    </div>
                    <div class="clear"> </div>
                    <input type="submit" value="{{ __('Register') }}">
            </form>
        </div>
    </div>
</div>

@endsection