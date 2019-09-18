@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="login-page">
            <div class="d-flex justify-content-center">
                <div class="login-card">
                    <div class="d-flex justify-content-center">
                        <div class="login-logo">
                            <img src="/images/logo.png" class="logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center login-container">
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @CSRF
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-user"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fal fa-lock-alt"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Wachtwoord">
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn btn-primary login-button">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
