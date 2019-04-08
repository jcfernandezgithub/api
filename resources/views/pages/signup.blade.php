<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <navigation-component></navigation-component>
        <div class="col-md-6 pt-4 pb-4 mx-auto">
            <register-component></register-component>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>