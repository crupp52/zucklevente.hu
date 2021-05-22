<!DOCTYPE html>
<html lang="hu">
<head>
    <title>zucklevente.hu</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/f42cf818d6.js" crossorigin="anonymous"></script>
    <link href="css/app.css" rel="stylesheet">
</head>

<body>
@yield('content')

<script src="js/app.js"></script>
@stack('scripts')
</body>
</html>