@extends('Layout')


@section('title', 'SAKE Peliculas | Editar '.$trailer->titulo)



@section('containt')


    <div class="container flex-center">
        <div class="row ">
            <main id="main">
                <form method="POST" action="{{ route('trailers.update',$trailer) }}"  class="border border-light bg-white p-5" enctype="multipart/form-data">
                    
                    @csrf

                    @method('PUT')
                         
                   
                    @include('trailers._Form',['btnText'=>'Actualizar','requerido'=>''])
                  
                </form>

            </main>
        </div>
    </div>




@endsection
