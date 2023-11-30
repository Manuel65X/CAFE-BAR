@extends('layouts.app')
@section('content')
<div class=" pt-12 pb-10">

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class=" pt-12 pb-10">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="flex justify-center mb-20">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
    
            <div class=" mb-4">
                <x-forms.input-label class=" mb-3" for="email" :value="__('Email')" />
                <x-forms.text-input id="email" class="block mt-1 w-full h-8" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-forms.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mb-4">
                <x-forms.input-label class=" mb-3" for="password" :value="__('Password')" />
    
                <x-forms.text-input id="password" class="block mt-1 w-full h-8"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-forms.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="flex justify-between mb-20">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
    
            <div class="flex items-center justify-end mt-4">
                
            </div>
            <div class="flex items-center justify-center mb-8">
                <x-primary-button class="text-center ">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>

            <hr>

            <div class="flex items-center justify-center mt-8">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('register') }}">
                    {{ __('you need an account?') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>
