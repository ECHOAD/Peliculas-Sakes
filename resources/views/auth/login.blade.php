@extends('Layout')



<main id="main">


    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
    
    
            <!-- The content half -->
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5">
    
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto ">
                                <h3 class="display-5 mb-5">Inicio de Sesion</h3>
                               
                                <form method="POST" action="{{ route('login') }}">

                                    @csrf


                                    <div class="form-group mb-3">
                                        <input name="email"  id="inputPassword" type="email" placeholder="Corro Electronico" required="" class="form-control @error('email') is-invalid @enderror rounded-pill border-0 shadow-sm px-4 text-primary" value="{{ old('email') }}" />
                                    </div>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    <div class="form-group mb-3">
                                        <input name="password"   id="inputPassword" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill  @error('password') is-invalid @enderror border-0 shadow-sm px-4 text-primary" value="{{ old('password') }}">
                                    </div>

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror


                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                    <div class="text-center d-flex justify-content-between mt-4"><p>No tienes cuenta?  <a href="{{ route('register') }}" class="font-italic text-muted"> 
                                            <u>Registrar</u></a></p></div>

                                 

                                    
                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
    
                </div>
            </div><!-- End -->
    
        </div>
    </div>




</main>



<style>

.login,
.image {
  min-height: 100vh;
 
}

.bg-image {
  background-image: url('https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
  background-size: cover;
  background-position: center center;
  filter:blur(5px);
  
}





</style>