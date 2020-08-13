<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" >

</head>
<body>
<div id="app">
    <v-app>
        <home-component></home-component>
    </v-app>
</div>

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>