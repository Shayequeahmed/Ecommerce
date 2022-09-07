@extends('layouts.fronts.base')
@section('content')
<section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email" />
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                            <span>
                                <input id="remember_me" type="checkbox" name="remember"> 
                                Keep me signed in
                            </span>

                            <button type="submit" class="btn btn-default">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="name" type="text" name="name" :value="old('name')" required autofocus placeholder="Name"/>
                             @error('name')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                            <input id="email" type="email" name="email" :value="old('email')" required placeholder="Email Address"/>
                             @error('email')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password"/>
                             @error('password')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                            <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password"/>
                            @error('password_confirmation')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                            <button type="submit" class="btn btn-default">Register</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->

@endsection
