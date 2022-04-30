                @php
                    $country= DB::table('countries')->get();
                    $city = DB::table('cities')->get();
                @endphp
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <center>
            <p>
                Vendors Register
            </p>

        </center>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ url('vendor/store-register') }}">
            @csrf

            <!-- company_name -->
            <div>
                <x-label for="company-name" :value="__('Company Name')" />


                <x-input id="name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required autofocus />
            </div>
            <!-- phone -->
            <div>
                <x-label for="phone" :value="__('Phone')" />

                <x-input id="name" class="block mt-1 w-full" type="phone" name="phone" :value="old('phone')" required  />
            </div>
            <!-- Country -->
            <div>
                <x-label for="company-name" :value="__('Country Name')" />
                <select name="country_id" id="">
                    @foreach ($country as $item)
                    <option value="{{ $item->id }}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <!-- city -->
            <div>
                <x-label for="company-name" :value="__('City Name')" />
                <select name="city_id" id="">
                    @foreach ($city as $item)
                    <option value="{{ $item->id }}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>


            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="confirm_password" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('vendor/login') }}">
                    {{ __('لديك حساب من قبل؟') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
