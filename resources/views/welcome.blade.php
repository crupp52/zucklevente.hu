@extends('layouts.app')

@section('content')
    <div class="font-serif">
        <div class="bg-green-300 w-full h-screen flex justify-center items-center">
            <div class="text-center">
                <div class="mb-16 text-gray-900">
                    <h1 class="text-5xl md:text-8xl">Zuck Levente</h1>
                    <p class="text-md md:text-lg italic">Szoftvertervező, programozó, mérnök.</p>
                    <div class="mt-4">
                        <p id="welcome-phone"></p>
                        <a href="#" id="welcome-email" class="hover:underline"></a>
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
                            <p class="mb-2">Zuck Levente vagyok, 22 éves. A középiskola óta foglalkoztat az informatika és foglalkozom programozással. Fő területem a webalkalmazások fejlesztése, Laravel alapú rendszereket készítek, különböző webes eszközzel kiegészítve. Tapasztalatom van egyszerű bemutatkozó oldalak készítésében, de nagyméretű adminisztrációs felületeket is fejlesztettem csapatban és önállóan.</p>
                            <p class="mb-2">Szeretem a kihívásokat, a változatos problémákat, ha egy projekt során új területeket/technológiákat ismerhetek meg.</p>
                            <p class="mb-2">Részt vettem az Óbudai Egyetem Állásbörze oldalának fejlesztésében, amely lehetőséget nyújtott a résztvevő cégeknek és a látogatok kezelésére, a cégek állásajánlatokat tudtak feltölteni a saját profiljuk alá.</p>
                            <p class="mb-2">Emellett .NET fejlesztéssel foglalkozom, grafikus asztali és webes alkalmazásokkal egyaránt.</p>
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
                        <h2 class="text-3xl">MMB 2021 Kft. - Oldtimer Esküvőre</h2>
                        <h3 class="text-lg mb-2 font-bold text-green-600">Szabadúszóként</h3>
                        <p class="mb-2">Elérhetőség: <a class="text-green-600 hover:underline" href="https://oldtimereskuvore.hu/" target="_blank">https://oldtimereskuvore.hu/</a></p>
                        <p>Frissen induló autóbérbeadással foglalkozó vállalkozás honlapja, ahol a felhasználó megismerkedhet a flotta járműveivel. Az oldal elérhető három nyelven, a szélesebb ügyfélkör kiépítése érdekében.</p>
                        <p class="mx-auto border-b-4 border-green-700 w-20 my-8"></p>
                    </div>
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
        <div id="contact" class="bg-green-300">
            <h1 class="mx-auto text-center text-3xl md:text-6xl font-serif pt-10 mb-10 table border-b-4 border-green-700">Kapcsolat</h1>
            <div class="w-full px-4 pb-12">
                <div class="w-full sm:w-2/3 xl:w-1/2 mx-auto pt-8 font-serif text-center">
                    <p class="mb-12">
                        Az alábbi lehetőségeken vagyok elérhető. A mennyiben kérdése, projektötlete van, forduljon felém bizalommal. Nyitott vagyok új vállalkozásának bemutató oldalának megalkotására, automatizációt igénylő folyamatainak kezelésére, bármely egyéb kihívást jelentő feladatra.
                    </p>
                    <div class="my-20">
                        <div class="text-3xl my-2">
                            <span class="inline-block align-middle mx-2"><i class="fas fa-phone-alt"></i></span>
                            <span class="inline-block align-middle mx-2"><p id="contact-phone"></p></span>
                        </div>
                        <div class="text-3xl my-2">
                            <span class="inline-block align-middle mx-2"><i class="fas fa-envelope"></i></span>
                            <span class="inline-block align-middle mx-2"><a id="contact-email" href="#" class="hover:underline"></a></span>
                        </div>
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
            $('#welcome-phone').text('+36303119201');

            let email = $('#welcome-email');
            email.text('hello@zucklevente.hu');
            email.attr('href', 'mailto:hello@zucklevente.hu');

            $('#contact-phone').text('+36303119201');
            email = $('#contact-email');

            email.text('hello@zucklevente.hu');
            email.attr('href', 'mailto:hello@zucklevente.hu');
        });
    </script>
@endpush
