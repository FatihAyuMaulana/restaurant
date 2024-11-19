@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endpush

@section('content')
<br>
<br>
<br>

<div class="auth-container">
    <div class="auth-card">
        <h2 class="auth-title">{{ __('Login') }}</h2>
        
        <form method="POST" action="{{ route('login') }}" class="auth-form">
            @csrf
            <div class="input-group">
                <label for="email" class="input-label">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="input-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password" class="input-label">{{ __('Password') }}</label>
                <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="input-error">{{ $message }}</span>
                @enderror
            </div>

            <div class="checkbox-group">
                <input type="checkbox" class="checkbox-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="checkbox-label">{{ __('Remember Me') }}</label>
            </div>

            <div class="auth-footer">
                <button type="submit" class="auth-btn">{{ __('Login') }}</button>
                {{-- @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="auth-link">{{ __('Forgot Your Password?') }}</a>
                @endif --}}
            </div>
        </form>
    </div>
</div>
@endsection
