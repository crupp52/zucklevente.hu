@extends('layouts.app')

@section('content')
    <div class="font-serif">
        <div class="bg-green-300 w-full h-screen flex justify-center items-center">
            <div class="text-center">
                <div class="mb-16 text-gray-900">
                    <h1 class="text-5xl md:text-8xl">zucklevente.hu</h1>
                    <p class="text-md md:text-lg italic hover:underline">Szoftvertervező, programozó, mérnök.</p>
                    <div class="mt-4">
                        <p id="phone"></p>
                        <a href="#" id="email" class="hover:underline"></a>
                    </div>
                </div>
                <a href="#about-me" class="transition py-2 px-5 rounded-sm bg-green-700 text-gray-50 hover:bg-green-800">Tudj meg többet!</a>
            </div>
        </div>
        <div id="about-me" class="bg-gray-300">
            <h1 class="mx-auto text-center text-3xl md:text-6xl font-serif pt-10 mb-10 table border-b-4 border-green-700">Rólam</h1>
            <div class="w-full px-4 pb-12">
                <div class="w-full sm:w-2/3 xl:w-1/2 mx-auto pt-8 font-serif">
                    <div class="block md:flex">
                        <div class="w-full md:w-1/3">
                            <img src="https://cdn.pixabay.com/photo/2016/08/08/09/17/avatar-1577909_960_720.png" alt="">
                        </div>
                        <div class="w-full md:w-2/3 px-0 md:px-4 py-3 md:py-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut arcu tortor, gravida eu dui ut, pellentesque laoreet felis. Fusce convallis neque a massa egestas semper. Ut fringilla nisi scelerisque nulla lacinia accumsan. Vivamus in neque sollicitudin, dignissim ex a, euismod nibh. Vestibulum blandit nunc enim, eleifend ultrices diam mattis sit amet. Quisque urna felis, accumsan id fermentum vel, tincidunt quis tortor. Praesent blandit, turpis non aliquam vestibulum,
                                ex lacus pharetra odio, sed pharetra augue ipsum id augue. Phasellus nec orci nisl.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="github" class="bg-green-300">
            <h1 class="mx-auto text-center text-3xl md:text-6xl font-serif pt-10 mb-10 table border-b-4 border-green-700">Github</h1>
            <div class="w-full px-4 pb-12">
                <div class="w-full sm:w-2/3 xl:w-1/2 mx-auto pt-8 font-serif text-center">
                    <p class="mb-12">
                        A Github profilomon megtalálhatóak korábbi munkáim, egyetemi feladataim és hobbi projektjeim forráskódjai.
                    </p>
                    <div class="text-3xl">
                        <span class="inline-block align-middle mx-2"><i class="fab fa-github fa-2x"></i></span>
                        <span class="inline-block align-middle mx-2"><a href="https://github.com/crupp52" target="_blank" class="hover:underline">@crupp52</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="references" class="bg-gray-300">
            <h1 class="mx-auto text-center text-3xl md:text-6xl font-serif pt-10 mb-10 table border-b-4 border-green-700">Referenciák</h1>
            <div class="w-full px-4 pb-12">
                <div class="w-full sm:w-2/3 xl:w-1/2 mx-auto pt-8 font-serif">
                    <div class="mb-10">
                        <h2 class="text-3xl">Óbudai Egyetem - Állásbörze</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Engineed Kft., Budapest</h3>
                        <p class="mb-2">Elérhetőség: <a class="text-green-600 hover:underline" href="https://allasborze.uni-obuda.hu/" target="_blank">https://allasborze.uni-obuda.hu/</a></p>
                        <p>Laravel alapú rendszer a kiállítók és a látogatók számára. Nyereményjáték esélyek kezelése, és listázása. Discord autentikáció a kiállítói szobákhoz. Kiállítók számára ajánlatkérő felület, szolgáltatások kiválasztása, az ajánlat elfogadása és megrendelése. Állásajánlatok létrehozás, kezelése és láthatóságágnak beállítása a cégek részéről.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
                    <div class="mb-10">
                        <h2 class="text-3xl">Microtrade Kft. – Új Landing oldal</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Engineed Kft., Budapest</h3>
                        <p class="mb-2">Elérhetőség: <a class="text-green-600 hover:underline" href="https://about.microtrade.hu/" target="_blank">https://about.microtrade.hu/</a></p>
                        <p>Az új arculatot és szolgáltatásokat bemutató oldal, egyedi Bootstrap 5 frontend keretrendszerrel és animált SVG infografikákkal.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
                    <div class="mb-10">
                        <h2 class="text-3xl">Manager Masszázs Csapat – Bemutatkozó oldal</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Szabadúszóként</h3>
                        <p class="mb-2">Elérhetőség: <a class="text-green-600 hover:underline" href="https://managermasszazscsapat.hu/" target="_blank">https://managermasszazscsapat.hu/</a></p>
                        <p>Újonnan alapított, kifejezetten cégeket megcélzó masszázs szolgáltatást nyújtó vállalkozás bemutatkozó oldala. Az admin felületen lehetőség van kezelni a meglévő szolgáltatásokat, illetve újat létrehozni.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-700 w-full flex justify-center items-center">
            <p class="text-center text-gray-50 py-4">Minden jog fenntartva. © 2021</p>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#phone').text('+36303119201');

            const email = $('#email');
            email.text('hello@zucklevente.hu');
            email.attr('href', 'mailto:hello@zucklevente.hu');
        });
    </script>
@endpush