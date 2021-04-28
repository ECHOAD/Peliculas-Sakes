@extends('Layout')


@section('title', 'SAKE Peliculas | Trailers ')


@section('containt')



    {{-- Hacer un filtro con categorias --}}






    <main id="main">

        <div class="container ">




            <div class=rows>


                <div class=" offset-5 offset-sm-12  offset-md-5  offset-lg-9 ">

                    <div class="buscador mt-4">



                        <div class="container">
                            <form action="{{ route('trailers.filtrar') }}" method="get">
                                @csrf

                                <label class="" for="titulo"> Buscar pelicula</label>


                                <input name="titulo" type="text" class="form-control" placeholder="Ex.. HARRY POTER"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2 ">
                                <div class="input-group-append">

                                </div>
                            </form>
                        </div>


                    </div>

                </div>





                <div class="contenedor col-12">

                    <div class="row">

                        @if (count($trailers) != 0)

                            <div class="col-4">


                                <button class="btn btn-primary">
                                    <i class='bx bx-add-to-queue nav__icon'>


                                        <a class="btn text-white" href="{{ route('trailers.create') }}"
                                            role="button">Crear</a>

                                    </i>

                                </button>


                                </button>
                            </div>


                        @endif






                    </div>


                </div>

                <div class="containt">



                    <div class="row col-rows-4">



                        @forelse ( $trailers as $trailer )

                            <div class=" offset-2 col-8  col-md-3 m4 m-md-5 m-lg-0 pt-4">
                                <h4 class="titulo">{{ $trailer->titulo }} | ★{{ $trailer->puntuacion }}</label> </h1>

                                    <div class="card">

                                        <img src="{{ asset('/storage/' . $trailer->portada) }}">




                                        <div class="descriptions">
                                            <h4 class="display-8">{{ $trailer->titulo }}</h4>
                                            <small>{{ $trailer->genero }}</small>
                                            <br>



                                            <strong class="align-center">Descripcion</strong>
                                            <p>
                                                {{ $trailer->descripcion }}
                                            </p>



                                        </div>


                                    </div>

                                    <div class=" container ">

                                        <div class="row">

                                            <div class="col-3 p-2 m-2">
                                                <a class=" btn btn-primary" href="{{ route('trailers.edit', $trailer) }}"
                                                    role="button">Editar</a>

                                            </div>



                                            <div class="col-3 p-2 m-2">
                                                <form action="{{ route('trailers.destroy', $trailer) }}" method="post"
                                                    enctype="multipart/form-data">

                                                    @csrf
                                                    @method('DELETE')


                                                    <button class="btn btn-danger" id="delete">Borrar</button>

                                                </form>


                                            </div>
                                        </div>





                                    </div>

                            </div>



                        @empty

                            <div class=" offset-2 col-8  col-md-3 m4 m-md-5 m-lg-0 pt-4">


                                <div class="card">

                                    <div class="container">


                                    </div>
                                    <img
                                        src="https://images.unsplash.com/photo-1505686994434-e3cc5abf1330?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1352&q=80">




                                    <div class="descriptions">

                                        <h1 class="display-6">
                                            No hay peliculas
                                        </h1>

                                        <a class="btn btn-primary text-white" href="{{ route('trailers.create') }}">
                                            Agregar</a>


                                    </div>
                                </div>
                            </div>


                        @endforelse









                    </div>

                </div>


    </main>






    <link rel="stylesheet" href="{{ asset('scss/style_index.css') }}">


    <script>
        document.getElementById("delete").addEventListener("click", function() {
            alert('Borrado perfectamente');
        });

    </script>
@endsection
