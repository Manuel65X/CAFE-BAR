<x-guest-layout>
    <div class=" pt-12 pb-10">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
            <div class="flex justify-center mb-14">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <!-- Name -->
            <div class=" mb-4">
                <x-forms.input-label class=" mb-3" for="name" :value="__('Name')" />
                <x-forms.text-input id="name" class="block mt-1 w-full h-8" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-forms.input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class=" mb-4">
                <x-forms.input-label class=" mb-3" for="email" :value="__('Email')" />
                <x-forms.text-input id="email" class="block mt-1 w-full h-8" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-forms.input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class=" mb-4">
                <x-forms.input-label class=" mb-3" for="password" :value="__('Password')" />
    
                <x-forms.text-input id="password" class="block mt-1 w-full h-8"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-forms.input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class=" mb-10">
                <x-forms.input-label class=" mb-3" for="password_confirmation" :value="__('Confirm Password')" />
    
                <x-forms.text-input id="password_confirmation" class="block mt-1 w-full h-8"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-forms.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex justify-center mb-7">
                <x-primary-button class="">
                    {{ __('Register') }}
                </x-primary-button>    
            </div>

            <hr class=" bg-gray-500">

            <div class="flex items-center justify-center mt-10">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
            </div>
            
        </form>
    </div>
</x-guest-layout>
