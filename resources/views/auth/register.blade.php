@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endpush

@section('content')
<br>
<br>
<br><br><br><br><br>
<br>
<br>


<div class="register-container">
    <div class="register-card">
        <div class="register-header">
            <h2>{{ __('Register') }}</h2>
            {{-- <p>Create an account to get started</p> --}}
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="email">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>

            <div class="input-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-footer">
                <button type="submit" class="register-btn">{{ __('Register') }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
