<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('scss/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('scss/estilos_formulario.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper/swiper-bundle.css')}}">
    <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css')}}">
   

    

    <title>@yield('title','SAKE Peliculas')</title>
</head>
<body>

    @include('partials._nav')

    
   @yield('containt') 


   


   <script src="{{ asset('js/jquery-3.5.1.min.js')}}"></script>
   <script src="{{ asset('js/popper.min.js')}}"></script>
   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.js')}}"></script>
   <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js')}}"></script>
   <script src="{{ asset('js/main.js')}}"></script>
   <script src="{{ asset('js/Form_Trailers.js')}}"></script>
 


   

</body>
</html>