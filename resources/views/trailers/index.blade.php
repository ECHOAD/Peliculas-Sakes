@extends('Layout')


@section('title', 'SAKE Peliculas | Trailers ')


@section('containt')



    {{-- Hacer un filtro con categorias --}}



    <div class="container ">


        <main id="main">




            <div class=rows>


                <div class=" offset-5 offset-sm-12  offset-md-5  offset-lg-9 ">

                    <div class="buscador mt-4">

                        <label class="col-form-label-lg text-white">Buscar Pelicula</label>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-md col ">

                            <input type="submit" value="Buscar" class="btn btn-primary" />


                        </div>

                    </div>

                </div>





                <div class="contenedor col-12">

                    <div class="row">


                        <div class="col-4">


                            <button class="btn btn-primary">
                                <i class='bx bx-add-to-queue nav__icon'>

                                    <a class="text-white " href="{{ route('trailers.create') }}">Crear</a>
                                </i>

                            </button>


                            </button>
                        </div>



                    </div>


                </div>

                <div class="containt">



                    <div class="row col-rows-4">

                        

                        @forelse ( $trilers as $triler )

                        <div class="col-12 col-md-4 m4 m-md-5 m-lg-0 pt-4">
                            <h4 class="titulo">{{ $triler->titulo }}</h1>

                            <div class="card">
                               
                                <img src="/storage/{{ $triler->portada }}">
                                


                                <div class="descriptions">
                                    <h1>{{ $triler->titulo }}</h1>
                                    <label>{{ $triler->puntuacion }}★</label>
                                    <br>


                                    <strong class="align-center">Descripcion</strong>
                                    <p>
                                       {{ $triler->descripcion}}
                                    </p>
                                    <div class="form-action">
    
                                        <button class="btn btn-primary">Editar</button>
        
                                        <button class="btn btn-danger">Borrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                            
                        @empty
                            
                        @endforelse
                
                        
     

              




                    </div>
                    

                    
                            


                       


















                        {{-- <div class="row">
              
              
                {{-- @forelse ( $trilers as $triler )

                
                <div class=" col-6 col-sm-12 col-md-6 col-lg-3  bg-white mt-4  rounded "> 
                    
                    <div >
                        <img  class=" img-card rounded" src="/storage/{{ $triler->portada }}">
                    </div>

                    
                    <div class="col-4">
    
                        <div>

                            <div class="form-group">
                                <label class="col-form-label"> <h5 class="title-card">Titulo</h5>
                                <p><strong>{{ $triler->titulo }}</strong></p>
                            </div>
            
                            <div class="form-group">
                                <label class="col-form-label"> <h5 class="title-card">Link del trailer</></h5>
                                <p><strong>{{ $triler->genero }}</strong></p>
                            </div>
            
                            <div class="form-group">
                                <label class="col-form-label"> <h5 class="title-card">Genero</h5>
                                <p><strong>{{ $triler->titulo }}</strong></p>
                            </div>
            
                            <div class="form-group">
                                <label class="col-form-label"> <h5 class="title-card">Accciones</h5>
                                <div class="form-action">
    
                                    <button class="btn btn-primary">Editar</button>
    
                                    <button class="btn btn-danger">Borrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                    
                @empty
                    
                @endforelse --}}


                   



        </main>

    </div>




    <link rel="stylesheet" href="{{ asset('scss/style_index.css') }}">


@endsection
