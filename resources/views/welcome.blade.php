@extends('layouts.app')

@section('content')
    <div>
        <div class="bg-green-300 w-full h-screen flex justify-center items-center">
            <div class="text-center">
                <div class="mb-20 font-serif text-gray-900">
                    <h1 class="text-5xl md:text-8xl">zucklevente.hu</h1>
                    <p class="text-md md:text-lg italic hover:underline">Szoftvertervező, programozó, mérnök.</p>
                </div>
                <a href="#references" class="transition py-2 px-5 rounded-sm bg-green-700 text-gray-50 hover:bg-green-800">Tudj meg többet!</a>
            </div>
        </div>
        <div id="references" class="bg-gray-300">
            <h1 class="mx-auto text-center text-3xl md:text-6xl font-serif pt-10 mb-10 table border-b-4 border-green-700">Referenciák</h1>
            <div class="w-full px-4 pb-12">
                <div class="w-full sm:w-2/3 xl:w-1/2 mx-auto pt-8 font-serif">
                    <div class="mb-10">
                        <h2 class="text-3xl">Óbudai Egyetem - Állásbörze</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Engineed Kft., Budapest</h3>
                        <p class="mb-6">Elérhetőség: <a class="text-green-600 hover:underline" href="https://allasborze.uni-obuda.hu/" target="_blank">https://allasborze.uni-obuda.hu/</a></p>
                        <p>Laravel alapú rendszer a kiállítók és a látogatók számára. Nyereményjáték esélyek kezelése, és listázása. Discord autentikáció a kiállítói szobákhoz. Kiállítók számára ajánlatkérő felület, szolgáltatások kiválasztása, az ajánlat elfogadása és megrendelése. Állásajánlatok létrehozás, kezelése és láthatóságágnak beállítása a cégek részéről.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
                    <div class="mb-10">
                        <h2 class="text-3xl">Microtrade Kft. – Új Landing oldal</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Engineed Kft., Budapest</h3>
                        <p class="mb-6">Elérhetőség: <a class="text-green-600 hover:underline" href="https://about.microtrade.hu/" target="_blank">https://about.microtrade.hu/</a></p>
                        <p>Az új arculatot és szolgáltatásokat bemutató oldal, egyedi Bootstrap 5 frontend keretrendszerrel és animált SVG infografikákkal.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
                    <div class="mb-10">
                        <h2 class="text-3xl">Manager Masszázs Csapat – Bemutatkozó oldal</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Szabadúszóként</h3>
                        <p class="mb-6">Elérhetőség: <a class="text-green-600 hover:underline" href="https://managermasszazscsapat.hu/" target="_blank">https://managermasszazscsapat.hu/</a></p>
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