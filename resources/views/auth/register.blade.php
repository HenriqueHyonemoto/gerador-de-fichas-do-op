<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <img src="/img/tenebris.png" style="width:100px" >
        </x-slot>

        <x-validation-errors class="mb-4" />
        <style>

.gy_border{
    outline: 2px solid yellow ;
    outline-style: dotted;
    box-shadow: 3px 3px  #00FF00;
    background-color:black;
}
.bg-gray-100{
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background: url(video/VideoBack.gif)
    no-repeat center;
    background-size:cover;
  }
.x-labelw{
    color:white;
}
input:-webkit-autofill,
textarea:-webkit-autofill,
select:-webkit-autofill {
  -webkit-box-shadow: 0 0 0 1000px rgb(20,20,20) inset !important;
  -webkit-text-fill-color: white !important;

}
        </style>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Nome') }}" class="x-labelw"/>
                <x-input id="name" class="block mt-1 w-full gy_border" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" class="x-labelw"/>
                <x-input id="email" class="block mt-1 w-full gy_border" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" class="x-labelw" />
                <x-input id="password" class="block mt-1 w-full gy_border" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirme a Senha') }}" class="x-labelw"/>
                <x-input id="password_confirmation" class="block mt-1 w-full gy_border" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Ja possui uma conta?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
