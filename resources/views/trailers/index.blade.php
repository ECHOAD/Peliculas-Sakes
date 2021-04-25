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

                            <div class=" offset-2 col-8  col-md-3 m4 m-md-5 m-lg-0 pt-4">
                                <h4 class="titulo">{{ $triler->titulo }} | ★{{ $triler->puntuacion }}</label> </h1>

                                    <div class="card">

                                        <img src="/storage/{{ $triler->portada }}">




                                        <div class="descriptions">
                                            <h1>{{ $triler->titulo }}</h1>



                                            <strong class="align-center">Descripcion</strong>
                                            <p>
                                                {{ $triler->descripcion }}
                                            </p>


                                            <button class="btn btn-primary">Editar</button>

                                            <button class="btn btn-danger">Borrar</button>

                                        </div>
                                    </div>
                            </div>



                        @empty

                            <div class=" offset-2 col-8  col-md-3 m4 m-md-5 m-lg-0 pt-4">


                                <div class="card">

                                    <img
                                        src="https://images.unsplash.com/photo-1505686994434-e3cc5abf1330?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80">




                                    <div class="descriptions">
                                        <h1 class="display-3">
                                            No hay peliculas
                                        </h1>






                                        <button class="btn btn-primary" style="right: 25% !important">Agregar</button>



                                    </div>
                                </div>
                            </div>


                        @endforelse









                    </div>


        </main>

    </div>




    <link rel="stylesheet" href="{{ asset('scss/style_index.css') }}">


@endsection
