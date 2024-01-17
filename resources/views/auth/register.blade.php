@extends('layouts.app', ['full' => true])

@section('content')
<div class="w-50 m-auto p-5">
    <div class="d-flex justify-content-center flex-column align-items-center gap-2 bg-white p-5 border border-blue">
        <img src="{{ url('images/logo.png') }}" alt="Logo" width="150" height="100"
            class="d-inline-block align-text-center my-3">
        <div class="d-flex justify-content-center flex-column">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <div class="">
                        <a class="nav-link active text-muted" aria-current="page" href="/login">Login</a>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="border-bottom border-3 border-black">
                        <a class="nav-link active text-black" aria-current="page" href="/register">Daftar</a>
                    </div>
                </li>
            </ul>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row my-2">
                    <label for="name" class="col-form-label text-md-start">{{ __('Name') }}</label>

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-2">
                    <label for="email" class="col-form-label text-md-start">{{ __('Email Address')
                        }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-4">
                    <label for="password" class="col-form-label text-md-start">{{ __('Password')
                        }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="row mb-4">
                    <label for="password-confirm" class="col-form-label text-md-start">{{ __('Confirm Password')
                        }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                </div>

                <div class="row mt-1">
                    <button type="submit" class="btn btn-primary o">
                        {{ __('Daftar') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection