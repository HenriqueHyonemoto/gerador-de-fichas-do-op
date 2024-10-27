<link rel="shortcut icon" href="{{ asset('img/tenebris.png') }}">

<x-guest-layout>

    <x-authentication-card class="gy_border">
   
        <x-slot name="logo">
            <img src="/img/tenebris.png" style="width:100px" >
        </x-slot>

        <x-validation-errors class="mb-4 " />
        <style>


.gy_border{
    outline: 2px solid yellow ;
    outline-style: dotted;
    box-shadow: 3px 3px  #00FF00;
    background-color:black;
}



.gy_border > input:-webkit-autofill{
    -webkit-text-fill-color: yellow !important;
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
        </style>
        
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
            
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <x-label for="email" value="{{ __('Email') }}" class="x-labelw"/>
                <x-input id="email" class="block mt-1 w-full gy_border" type="email" name="email" :value="old('email')" required autofocus autocomplete="user" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Senha') }}" class="x-labelw"/>
                <x-input id="password" class="block mt-1 w-full gy_border" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Esqueceu a senha?') }}
                    </a>
                @endif

                <x-button class="ml-4 gy_border">
                    {{ __('Logar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
