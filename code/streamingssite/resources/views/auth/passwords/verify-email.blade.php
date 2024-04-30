<!-- resources/views/auth/verify-email.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="mb-3">
                            {{ __('Before proceeding, please check your email for a verification link.') }}
                            {{ __('If you did not receive the email') }}, <form class="d-inline" method="POST" action="{{ route('verification.send') }}">@csrf <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button></form>.
                        </div>

                        <div class="mb-3">
                            {{ __('If you are having trouble accessing your account, please') }}, <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('contact us') }}</a>.
                        </div>

                        <form class="d-inline" method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Logout') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
