<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Zuck Levente - Szoftvertervező, programozó, mérnök.</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/f42cf818d6.js" crossorigin="anonymous"></script>
    <link href="css/app.css" rel="stylesheet">

    <meta name="keywords" lang="hu" content="weboldalak, weboldal készítés, egyszerűen, webdesign, blog, képgaléria, honlapkészítés, weblap készítés, weboldal készítés budapest, budapest">
    <meta name="description" content="Weboldalkészítés kisvállalatoknak, cégeknek, eseményekhez. Weblapok fejlesztése, keresőoptimalizálás, látogatottság elemezése és markeing megoldások.">
</head>

<body>
@yield('content')

<script src="js/app.js"></script>
@stack('scripts')
</body>
</html>