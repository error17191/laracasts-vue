<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.css">
    <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<div id="app">
    @include('layouts.header')
    <router-view></router-view>
</div>

<script src="/assets/js/app.js"></script>
</body>
</html>