<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    {{--  ========== Font Google =======  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <!-- Styles -->
    @vite('resources/css/app.css')
    {{-- == Awesome Fonts  == --}}
    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
</head>
<body class="font-[inter]">
@yield('content')

{{-- ========= Scripts =====--}}
<script>
    const toggler = document.getElementById('toggle_menu');
    const navbar = document.getElementById('navbar');

    toggler.addEventListener('click' , () => {
        if (navbar.classList.contains('h-0')) {
            navbar.classList.remove('h-0');
            navbar.classList.add('h-[180px]');
        }else{
            navbar.classList.add('h-0');
            navbar.classList.remove('h-[180px]');
        }
    })
</script>
</body>
</html>
