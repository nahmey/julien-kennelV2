<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Julien Kennel">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/ico.png')}}"/>

        <meta name="description" content="Julien Kennel, développeur web à Saverne dans le Bas-Rhin, création de sites internet et d'applications métiers sur mesure, modernes et performants.">

        <meta name="keywords" content="Julien Kennel, développeur web, création de site internet, développement d'applications métiers, logiciels sur mesure, applications web, Saverne, Strasbourg, Bas-Rhin" />

        <meta name="robots" content="index, follow, max-image-preview:large">

        <meta property="og:site_name" content="Julien Kennel">
        <meta property="og:url" content="https://julien-kennel.fr">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:description" content="Julien Kennel, développeur web, création de site internet, développement d'applications métiers, logiciels sur mesure, applications web, Saverne, Strasbourg, Bas-Rhin">

        <link rel="canonical" href="https://julien-kennel.fr">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead

    </head>
    
    <body>
        @inertia
    </body>
</html>