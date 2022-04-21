<x-guest-layout>


 <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="text-center mb-10">
                <h1 class="font-bold text-3xl text-gray-900">Chiwi Acádemy</h1>
                <p>Enter your information to register</p>
            </div>
            <div>
                <div class="w-1 px-3 mb-5">
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <div class="flex">
                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"  placeholder="Smith"/>
                    </div>
                </div>
            </div>

         {{--    email --}}
         <div class="w-full px-3 mb-5 mt-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <div class="flex">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required  placeholder="johnsmith@example.com"/>
            </div>
        </div>

           {{-- password --}}
           <div class="w-full px-3 mb-12 mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <div class="flex">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="************" />
            </div>
        </div>

        <div class="w-full px-3 mb-12 mt-4">
            <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <div class="flex">
                <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="************" />
            </div>
        </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm  " href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4 ">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>

<style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css')</style>


</x-guest-layout>
