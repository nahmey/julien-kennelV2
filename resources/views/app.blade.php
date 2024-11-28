<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="C.V Julien Kennel, développeur d'applications et de sites web, région de Saverne et Strasbourg dans le bas-rhin.">
        <meta name="author" content="Julien Kennel">
        <link rel="shortcut icon" type="image/png" href="{{asset('images/ico.png')}}"/>
        <meta name="keywords" content="développeur web, sites internet, applications, logiciels métiers, Saverne, Strasbourg, Bas-Rhin" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
        <link rel="stylesheet" href="{{asset('css/aos.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

        @routes
        @vite('resources/js/app.js')
        @inertiaHead

        <style>
            body, html, h1, .h1, h2, .h2, h3, .h3, h4, .h4{
                font-family: 'Nunito', sans-serif!important;
/*                font-size: 14px!important;*/
            }
            .hero{
                background-color: #242323;
            }
        </style>
    </head>
    
    <body>
        @inertia
    </body>

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('js/aos.js')}}"></script>
    <!-- <script src="{{asset('js/moment.min.js')}}"></script> -->
    <script src="{{asset('js/daterangepicker.js')}}"></script>

    <script src="js/typed.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Select slides and images
    const slides = document.querySelector('.slides');
    const images = slides.querySelectorAll('img');
    
    // Add data-id attributes to images
    images.forEach((img, i) => {
        img.setAttribute('data-id', i + 1);
    });

    // Custom implementation of typing effect
    function createTypingEffect() {
        const typedWords = document.querySelector('.typed-words');
        const words = [
            "De logiciels métiers", 
            "D'applications", 
            "De sites web", 
            "De base de données"
        ];
        
        let wordIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        
        function type() {
            const currentWord = words[wordIndex];
            const currentElement = typedWords;
            
            // Update slide image
            const arrayPos = wordIndex + 1;
            const allImages = document.querySelectorAll('.slides img');
            allImages.forEach(img => img.classList.remove('active'));
            const activeImage = document.querySelector(`.slides img[data-id="${arrayPos}"]`);
            if (activeImage) activeImage.classList.add('active');
            
            // Typing mechanism
            if (!isDeleting && charIndex <= currentWord.length) {
                currentElement.textContent = currentWord.substring(0, charIndex + 1);
                charIndex++;
            }
            
            if (isDeleting && charIndex >= 0) {
                currentElement.textContent = currentWord.substring(0, charIndex);
                charIndex--;
            }
            
            // Determine typing state
            if (!isDeleting && charIndex === currentWord.length) {
                setTimeout(() => {
                    isDeleting = true;
                }, 4000);
            }
            
            if (isDeleting && charIndex === 0) {
                isDeleting = false;
                wordIndex = (wordIndex + 1) % words.length;
            }
            
            // Typing speed
            const typeSpeed = isDeleting ? 80 : 80;
            setTimeout(type, typeSpeed);
        }
        
        // Start typing after initial delay
        setTimeout(type, 1000);
    }

    // Initialize typing effect
    createTypingEffect();
});
    </script>

    <script src="{{asset('js/custom.js')}}"></script>
</html>