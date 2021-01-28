<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="{{asset('/css/style.css')}}?v=3">
    <link rel="stylesheet" href="{{asset('/css/split.css')}}?v=3">
    <link rel="stylesheet" href="{{asset('/css/product.css')}}?v=3">
    <link rel="stylesheet" href="{{asset('/css/media-queries.css')}}?v=3">
    <!--fonts.google.com-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,900&display=swap" rel="stylesheet">
    <!-- https://material.io/resources/icons/?style=baseline -->
    <!-- https://google.github.io/material-design-icons/ -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>{{$siteTitle.' - '.$pageTitle}}</title>
</head>
<body>
    <x-header>
        <x-slot name="mainMenu">
            <x-mainMenu />
        </x-slot>
    </x-header>
    {{ $slot }} {{-- Slot for content --}}
    <x-footer />
    <script src="{{asset('/js')}}/main.js"></script>
</body>
</html>