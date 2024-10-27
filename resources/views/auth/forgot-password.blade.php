<link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        <img src="/img/tenebris.png" style="width:100px" >
        </x-slot>

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
.cwhite{
color:white;
}
        </style>
        <div class="mb-4 text-sm text-gray-600 cwhite">
            {{ __('Esqueceu sua senha? Sem problemas. Apenas nos informe seu endereço de email e enviaremos um link de redefinição de senha para que você possa escolher uma nova.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block ">
                <x-label for="email" value="{{ __('Email') }}" class="cwhite"/>
                <x-input id="email" class="block mt-1 w-full gy_border " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="cwhite gy_border">
                    {{ __('Link de redefinição de senha por email.') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
