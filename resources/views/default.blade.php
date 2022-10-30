<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Server Room</title>

        @livewireStyles
        
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
            
        @vite('resources/css/app.css')

        <!-- Styles -->
        <style> body {font-family: 'Poppins', sans-serif;} </style>
        <link crossorigin="anonymous" href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet"/>
        <script crossorigin="anonymous" defer src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">

        <wireui:scripts />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>

    <body class="p-5 min-h-screen min-w-screen  bg-purple-200">
        <div class="px-4 py-16 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
            <div class="max-w-4xl p-6 mt-5 mx-auto bg-white rounded-lg shadow-lg">

                <livewire:wizard/>
            
            </div>
        </div>
        @livewireScripts
    </body>
</html>