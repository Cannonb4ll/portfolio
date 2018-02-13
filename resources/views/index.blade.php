<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dennis Smink | Freelance PHP programmeur</title>
    <meta name="description" content="Dennis Smink - Freelance programmeur">
    <link rel="stylesheet" href="{{ $css }}">
</head>

<body>
<div id="app">
    <main-layout>
        <keep-alive>
            <router-view></router-view>
        </keep-alive>
    </main-layout>
</div>
<script src="{{ $js }}"></script>

</body>
</html>
