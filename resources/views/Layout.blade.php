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


    <link rel="stylesheet" href="{{ asset('css/venobox.css') }}" type="text/css" media="screen" />
</head>
<body>

    @include('partials._nav')

    
   @yield('containt') 


   


   <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript" src="{{ asset('js/venobox.min.js')}}"></script>
   <script src="{{ asset('js/popper.min.js')}}"></script>
   <script src="{{ asset('js/bootstrap.min.js')}}"></script>
   <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.js')}}"></script>
   <script src="{{ asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
   <script src="{{ asset('js/main.js')}}"></script>


</body>


</html>


<script>

$(document).ready(function(){
    $('.venobox').venobox({
      spinColor: '#black',
      autoplay: 'true',
      spinner: 'spinner-pulse',
      titleColor: 'white',
    }); 
});
</script>