<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
</head>
<body>
    @include("partials.header")
    @yield("partials.home_books")
    @yield("partials.home_mid_banner")
    @include("partials.footer")
</body>
</html>