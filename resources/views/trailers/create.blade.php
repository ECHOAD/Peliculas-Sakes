@extends('Layout')


@section('title', 'SAKE Peliculas | Crear Pelicula')



@section('containt')


    <div class="container flex-center">
        <div class="row ">
            <main id="main">
                <form class="border border-light bg-white p-5"  method="POST" action="{{ route('trailers.store')}}"  enctype="multipart/form-data" >
                    @csrf
                    @include('trailers._Form')
                </form>

            </main>
        </div>
    </div>




@endsection
