@extends('layout')

@section('content')
    <main class=login>
        <div class="container login__form-wrapper">
            <form method="POST" action="{{ route('login') }}" class="login__form">
                @csrf

                <label for="email" class="login__label">
                    <p class="login__label-text mt-0">{{ __('E-Mail') }}</p>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <p style="margin-bottom:0;">
                            <small style="color:red;">{{ $message }}</small>
                        </p>
                    @enderror
                </label>


                <label for="password" class="login__label">
                    <p class="login__label-text">{{ __('Password') }}</p>
                    <input id="password" type="password" name="password" required autocomplete="current-password">

                    @error('password')
                        <p style="margin-bottom:0;">
                            <small style="color:red;">{{ $message }}</small>
                        </p>
                    @enderror
                </label>


                
                {{-- <label for="remember" class="login__label">
                    <p class="login__label-text" style="display: inline-block">{{ __('Remember Me') }}</p>
                    <input style="width: initial;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </label> --}}

                <br><br>

                <input type="submit" class="login__submit-btn" value="{{ __('Login') }}">
                <br>
                <br>
                {{-- @if (Route::has('password.request'))
                    <a class="link link--primary" style="display:inline-block;margin:auto;text-align:center;" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif --}}
            </form>
        </div>
    </main>
@endsection
