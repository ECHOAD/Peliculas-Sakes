

              

              @include('partials.errors_forms')

                <h2 class="display-6 text-center mb-4">Crear Peliculas</h2>

                <div class="container">

                  <div class="row row-col-6">

                    <div class="col-6">

                      <div class="form-group">

                        <label for="puntuacion"> Calificacion</label>
                        <p class="clasificacion" id="form" value="{{ old('puntuacion' ,$trailer->puntuacion) }}">
                          <input id="radio1" type="radio" name="puntuacion" value="5"><!--
                          --><label for="radio1">★</label><!--
                          --><input id="radio2" type="radio" name="puntuacion" value="4"><!--
                          --><label for="radio2">★</label><!--
                          --><input id="radio3" type="radio" name="puntuacion" value="3"><!--
                          --><label for="radio3">★</label><!--
                          --><input id="radio4" type="radio" name="puntuacion" value="2"><!--
                          --><label for="radio4">★</label><!--
                          --><input id="radio5" type="radio" name="puntuacion" value="1"><!--
                          --><label for="radio5">★</label>
                        </p>
                      </div>

                      <div class="form-group">
                        <label for="title">Titulo de la pelicula</label>
                        <input name="titulo" type="text" class='form-control' value="{{ old('titulo' ,$trailer->puntuacion) }}">
                      </div>
                      <div class="form-group">
                        <label for="url">Link del trailer</label>
                        <input name="url" type="text" class='form-control' value="{{ old('url' ,$trailer->url) }}">
                      </div>
                      <div class="form-group">
                        <label for="genero">Genero</label>
                        <input name="genero" type="text" class='form-control' value="{{ old('genero' ,$trailer->genero) }}" >
                      </div>
                      <div class="form-group">
                        <label for="descripcion">Sinopsis de la pelicula</label>
                        <textarea name="descripcion"  class='form-control' rows="4" >{{ old('descripcion' ,$trailer->descripcion) }}</textarea>
                      
                      
                      </div>
                      </div>
                    
                    
                      <div class="col-6">

                        <div class="container">


                          <div class="row row-cols-6">


                            <div class="col-12">

                              <div class="input-group mb-3">
                               
                                  <input  name="portada" class="form-control" id="upload" type="file" value="{{ old('file' ,$trailer->file) }}"   required  onchange="onFileSelected(event)" ></button>
                                </div>
                              </div>


                            </div>


                            <div class="col-12">

                              <div class="form-group">

                                <p class="text-dark text-center" ><strong>Portada</strong></p>
      
                                <img class="rounded-3" src="{{ asset(old('file',$trailer->file)) }}" alt="Portada de la imagen" id="uploadfile" width="800" height="800">
                                
                              </div>
                              
                              <div class="form-acion pt-4">

                                <button class="btn btn-primary">Agregar</button>
                                <button class="btn btn-danger">Cancelar</button>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>


                <script>

                  
function onFileSelected(event) {
    var selectedFile = event.target.files[0];
    var reader = new FileReader();

    var imgtag = document.getElementById("uploadfile");
    imgtag.title = selectedFile.name;

    reader.onload = function(event) {
        imgtag.src = event.target.result;
    };

    reader.readAsDataURL(selectedFile);
}
                </script>
                
