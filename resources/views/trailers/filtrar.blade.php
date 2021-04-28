@extends('Layout')


@section('title', 'SAKE Peliculas | Filtrar |')





@section('containt')


    <main id="main">

        <div class="container">

            <div class="row">

                <div class="col-12 mt-5">

                    <div class="input-group mb-3">
                        <form action="{{ route ('filtrar') }}" method="post">
                            @csrf
                            <input name="titulo" type="text" class="form-control" placeholder="Ex.. HARRY POTER" aria-label="Recipient's username" aria-describedby="basic-addon2 " >
                            <div class="input-group-append">
                            <button class="btn btn-outline-secondary"  id="boton" > Buscar</button>
                            </div>
                         </form>
                      </div>

                 
                </div>


                @forelse ( $trailers as $trailer )

                <div class="col-12 col-md-6 col-lg-3 mt-5">

                    <div class="container">

                        <div class="row">
                            <!-- BEGIN: cards -->
                            <div class="cards" data-effect="zoom">
                                <button class="cards__save  js-save" type="button">
                                    <i class="fa  fa-bookmark"></i>
                                </button>
                                <figure class="cards__image">
                                    <img src="storage/{{ $trailer->portada }}"
                                        alt="Short description">
                                </figure>
                                <div class="cards__body">
                                    <h3 class="cards__name">{{ $trailer->titulo }}</h3>

                                </div>
                                <div class="cards__footer">

                                

                                    <div class="container">

                                        <div class="row">

                                          

                                            <div class="col-12">
                                                <p class="cards__date"> Añadido: {{  $trailer->created_at->diffForHumans()  }}</p>


                                            </div>

                                            <div class="col-12 p-4">

                                                <p class=""> <button class="btn btn-danger"> <a class="text-white "href="{{ $trailer->url }}" target="_blank">Trailer</a></button></p>



                                            </div>

                                            <div class="col-12">


                                                <p class="scroll">{{ $trailer->descripcion }}</p>
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





<script>






let paused = true;
let speed = 2; // 1 - Fast | 2 - Medium | 3 - Slow
let interval = speed * 5;

let elements = document.getElementsByClassName("scroll");

function startScroll() {
    let id = setInterval(function() {
        window.scrollBy(0, 2);
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            // Reached end of page
            stopScroll();
        }
    }, interval);
    return id;
}

function stopScroll() {
    clearInterval(scrollerID);
}


for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click',function(event) {

        alert('asdsad');

        

   
if (event.which == 13 || event.keyCode == 13) {
    // It's the 'Enter' key
    if (paused == true) {
        elements = startScroll();
        paused = false;
    } else {
        stopScroll();
        paused = true;
    }
}
}, true);
}




</script>