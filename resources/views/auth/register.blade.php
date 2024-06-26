<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>


        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
       <!-- username -->
       <div class="mt-4">
        <x-input-label for="username" :value="__('Username')" />

        <x-text-input id="username" class="block mt-1 w-full"
                        type="text"
                        name="username" required autocomplete="username" />

        <x-input-error :messages="$errors->get('username')" class="mt-2" />
    </div>
<!-- phonenumber-->
<div class="mt-4">
    <x-input-label for="phonenumber" :value="__('Phone Number')" />

    <x-text-input id="phonenumber" class="block mt-1 w-full"
                    type="text"
                    name="phonenumber" required autocomplete="phonenumber" />

    <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
</div>
<!-- address-->
<div class="mt-4">
    <x-input-label for="address" :value="__('address')" />

    <x-text-input id="address" class="block mt-1 w-full"
                    type="text"
                    name="address" required autocomplete="address" />

    <x-input-error :messages="$errors->get('address')" class="mt-2" />
</div>


{{-- <!-- Gender Field -->
<div class="mt-4">
    <x-input-label for="gender" :value="__('Gender')" />

    <select id="gender" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>

    <x-input-error :messages="$errors->get('gender')" class="mt-2" />
</div> --}}
        <!-- Gender Field -->
<div class="mt-4">
    <x-input-label for="gender" :value="__('Gender')">Gender</x-input-label>
    <select id="gender" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring-indigo-200 focus-ring-opacity-50"   name="gender" required>
        <option value="">Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
</div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
