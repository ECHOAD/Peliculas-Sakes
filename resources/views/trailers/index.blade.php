@extends('Layout')


@section('title', 'SAKE Peliculas | Trailers ')


@section('containt')



{{-- Hacer un filtro con categorias  --}}



    <div class="container ">
        
        
        <main id="main">


        

        <div class=rows>


            <div class=" offset-5 offset-sm-12  offset-md-5  offset-lg-9 "> 

                <div class="buscador mt-4" >
                    
                    <label class="col-form-label-lg text-white">Buscar Pelicula</label>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-md col ">
                
                        <input type="submit" value="Buscar" class="btn btn-primary" />

                        
                    </div>

                </div>

            </div>
            




            <div class="contenedor de acciones col-12">

                <div class="row">


                    <div class="col-4"> 
                        <button class="btn btn-primary" id="onclick"  >
                        <i class='bx bx-add-to-queue nav__icon'></i>
                        Añadir Pelicula
                    
                    </button></div>
    
                   

                </div>
           
             
            </div>

            <div class="row">
                <div class=" col-6 col-sm-12 col-lg-4  bg-white mt-4 mr-4 rounded">
                    
                        <div class=" ">
                            <img  class=" img_card rounded" src="img/1.png">
                        </div>
                        <div class="col-4">
        
                            <div>
    
                                <div class="container">
                                    <label class="col-form-label"> <h5 class="title-card">Titulo</h5>
                                    <p><strong>Intelesteral</strong></p>
                                </div>
                
                                <div class="container">
                                    <label class="col-form-label"> <h5 class="title-card">Genero</></h5>
                                    <p><strong>SCI-FI</strong></p>
                                </div>
                
                                <div class="container">
                                    <label class="col-form-label"> <h5 class="title-card">Films</h5>
                                    <p><strong>Intelesteral</strong></p>
                                </div>
                
                                <div class="container">
                                    <label class="col-form-label"> <h5 class="title-card">Accciones</h5>
                                    <div class="form-action">
        
                                        <button class="btn btn-primary">Editar</button>
        
                                        <button class="btn btn-danger">Borrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>





        

            
            </main>
            

    


         </div>
         

     

        
          


    </div>


 










    @include('trailers._Form')

@endsection
