<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .font-bebas {
            font-family: "Bebas Neue", serif;
        }
    </style>
</head>

<body class="bg-white relative">



    <!--Header We Fem-->

    @include('components.Sections.Cuestionario.Header')


    <main class="">
        <div id="card1" class="hidden">
            @include('components.Sections.Cuestionario.InitQuiz')
        </div>
        <div id="card2" class="hidden">
            @include('components.Sections.Cuestionario.FirstQuiz')
        </div>
        <div id="card3" class="hidden">
            @include('components.Sections.Cuestionario.SecondQuiz')
        </div>
        <div id="card4" class="hidden">
            @include('components.Sections.Cuestionario.ThreeQuiz')
        </div>
        <div id="card5" class="hidden">
            @include('components.Sections.Cuestionario.FourQuiz')
        </div>
        <div id="card6" class="hidden">
            @include('components.Sections.Cuestionario.Result1Quiz')
        </div>
        <div id="card7" class="">
            @include('components.Sections.Cuestionario.Result2Quiz')
        </div>


    </main>

    @include('components.Sections.Home.Footer-home')
    <script>
        function showCard(cardNumber) {
            // Hide all cards
            document.getElementById('card1').classList.add('hidden');
            document.getElementById('card2').classList.add('hidden');
            document.getElementById('card3').classList.add('hidden');
            document.getElementById('card4').classList.add('hidden');
            document.getElementById('card5').classList.add('hidden');
            // Show selected card
            document.getElementById('card' + cardNumber).classList.remove('hidden');
        }
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>


</html>
