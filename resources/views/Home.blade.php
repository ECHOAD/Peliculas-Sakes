@extends('Layout')


@section('title', 'SAKE Peliculas | Home|')





@section('containt')


    <main id="main">

        <div class="container">

            <div class="row">

                <div class="col-12 mt-5">

                    <div class="container">
                        <form action="{{ route('home.filtrar') }}" method="get">
                            @csrf
                            <input name="titulo" type="text" class="form-control search"
                                placeholder="BUSCAR EX. HARRY POTER" aria-label="Recipient's username"
                                aria-describedby="basic-addon2 ">
                            <div class="input-group-append">

                            </div>
                        </form>
                    </div>


                </div>


                @forelse ( $trailers as $trailer )

                    <div class="col-12 col-md-6 col-lg-3 mt-5">

                        <div class="container">

                            <div class="row">
                                <!-- BEGIN: cards -->
                                <h3 class="text-white">{{ $trailer->titulo }}|★{{ $trailer->puntuacion }} </h3>
                                <div class="cards" data-effect="zoom">
                                    
                                    <button class="cards__save  js-save" type="button">

                                        <button class="venobox btn btn-danger bx bxl-youtube" title="{{ $trailer->titulo }}"
                                            data-vbtype="video" data-overlay="rgba(0, 0, 0, 0.747)"
                                            href="{{ $trailer->url }}">
                                            
                                            

                                            
                                        
                                        </button>


                                        <i class="fa  fa-bookmark"></i>
                                    </button>
                                    <figure class="cards__image">
                                        <img src="storage/{{ $trailer->portada }}" alt="Short description">
                                    </figure>
                               
                                    <div class="cards__footer">



                                        <div class="container">

                                            <div class="row">



                                                <div class="col-12">
                                                    <p class="cards__date text-black"> Añadido:<br>
                                                        {{ $trailer->created_at->diffForHumans() }}</p>


                                                </div>

                                                <div class="col-12 p-4">

                                              


                                                </div>

                                                <div class="col-12">

                                                   <strong>Descripcion</strong>
                                                    <br>

                                                    <p class="text-white">{{ $trailer->descripcion }}</p>
                                                </div>

                                          



                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                @empty


                    <div class="col-12 col-md-6 col-lg-3 mt-5">

                        <div class="container">


                            <div class="row">
                                <!-- BEGIN: cards -->
                                <div class="cards" data-effect="zoom">
                                    <button class="cards__save  js-save" type="button">
                                        <i class="fa  fa-bookmark"></i>
                                    </button>
                                    <figure class="cards__image">
                                        <img src="https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                                            alt="Short description">
                                    </figure>

                                    <div class="cards__footer">



                                        <p>UPS :S, no hay peliculas registradas </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                @endforelse
            </div>



    </main>


    <footer>

    </footer>


@endsection




