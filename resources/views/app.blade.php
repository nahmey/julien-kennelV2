<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Julien Kennel">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/logo/logo_jk_v1.png')}}"/>

        <meta name="description" content="Julien Kennel, développeur web à Saverne dans le Bas-Rhin, création de sites internet et d'applications métiers sur mesure, modernes et performants.">

        <meta name="keywords" content="Julien Kennel, développeur web, création de site internet, développement d'applications métiers, logiciels sur mesure, applications web, Saverne, Strasbourg, Bas-Rhin" />

        <meta name="robots" content="index, follow, max-image-preview:large">

        <meta property="og:locale" content="fr_FR">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Julien Kennel | Développeur web à Saverne | Création de site internet">
        <meta property="og:site_name" content="Julien Kennel">
        <meta property="og:url" content="https://julien-kennel.fr">
        <meta property="og:description" content="Julien Kennel, développeur web, création de site internet, développement d'applications métiers, logiciels sur mesure, applications web, Saverne, Strasbourg, Bas-Rhin">

        <link rel="canonical" href="https://julien-kennel.fr">

        <link href="{{asset('css/nunito.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead

        <!-- <link rel="preload" href="{{ Vite::asset('resources/js/app.js') }}" as="script"> -->
        <link rel="preload" href="{{asset('images/fond_noir_1.jpg')}}" as="image">
        <link rel="preload" href="{{asset('images/fond_noir_2.jpg')}}" as="image">
    </head>
    
    <body>
        @inertia
    </body>
</html>