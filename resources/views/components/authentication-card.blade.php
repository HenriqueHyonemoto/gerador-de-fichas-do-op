<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg gy_border" style="color:white; background-color:black">
        {{ $slot }}
    </div>
</div>
<style>
    .gy_border{
    outline: 2px solid yellow ;
    outline-style: dotted;
    box-shadow: 3px 3px  #00FF00;
}
textarea{
    background-color: rgb(70,70,70);
}
    </style>