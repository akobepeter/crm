
@extends('layout.app')

@section('title','Login')


@section('content')

        <div class="wrapper">
        <section class="login-content">
           <div class="container h-100">
              <div class="row align-items-center justify-content-center h-100">
                 <div class="col-md-5">
                    <div class="card">
                       <div class="card-body">
                          <!-- <div class="auth-logo">
                             <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                          </div> -->
                          <h2 class="mb-2 text-center">Sign In</h2>
                          <p class="text-center">To Keep connected with us please login with your personal info.</p>
                         
                          <x-auth-validation-errors class="mb-4 text-danger" :errors="$errors" />

                          <form method="POST" action="{{ route('login') }}">
                              @csrf
                             <div class="row">
                                <div class="col-lg-12">
                                   <div class="form-group">
                                      <label>Email</label>
                                      <input class="form-control" type="email" name="email" placeholder="admin@example.com">
                                   </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="form-group">
                                      <label>Password</label>
                                      <input class="form-control" type="password" name="password" placeholder="********">
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="custom-control custom-checkbox mb-3">
                                      <input type="checkbox" class="custom-control-input" id="customCheck1">
                                      <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                   <a href="{{ route('password.request') }}" class="text-primary float-right">Forgot Password?</a>
                                </div>
                             </div>
                             <div class="d-flex justify-content-between align-items-center">
                                <span>Create an Account <a href="{{route('register')}}" class="text-primary">Sign Up</a></span>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                             </div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        </div>
@endsection



{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        href="{{route('password.index')}}" --}}

        <!-- Session Status -->
        {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}

        <!-- Validation Errors -->

        {{-- <form method="POST" action="{{ route('login') }}">
            @csrf --}}

            <!-- Email Address -->
            {{-- <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div> --}}

            <!-- Password -->
            {{-- <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div> --}}

            <!-- Remember Me -->
            {{-- <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div> --}}

            {{-- <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
