@extends("layouts.default")
@section("title", "register")
@section("content")
<main class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session() -> has("success"))
            <div class="alert alert-success">
                {{session()->get("success")}}
            </div>
            @endif
            @if(session() -> has("error"))
            <div class="alert alert-danger">
                {{session()->get("error")}}
            </div>
            @endif
            <div class="card">
                <h3 class="card-header text-center">Register</h3>
                <div class="card-body">
                    <form method="POST" action='{{route("register.post")}}'>
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Nombre" id="nombre" class="form-control"
                                name="nombre" autofocus>
                        @if ($errors->has('nombre'))
                            <span class="text-danger">{{ $errors->first('nombre')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Apellido" id="apellido" class="form-control"
                                name="apellido" autofocus>
                        @if ($errors->has('apellido'))
                            <span class="text-danger">{{ $errors->first('apellido')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="DNI" id="dni" class="form-control"
                                name="dni" autofocus>
                        @if ($errors->has('dni'))
                            <span class="text-danger">{{ $errors->first('dni')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Email" id="email" class="form-control"
                                name="email" required autofocus>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" placeholder="Confirme password" id="password_confirmation" class="form-control"
                                name="password_confirmation" required>
                        </div>
                        <div class="form-group mb-3">
                            <input type="telefono" placeholder="Telefono" id="telefono" class="form-control"
                                name="telefono" >
                        @if ($errors->has('telefono'))
                            <span class="text-danger">{{ $errors->first('telefono')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" placeholder="Pais" id="pais" class="form-control"
                                name="pais">
                        @if ($errors->has('pais'))
                            <span class="text-danger">{{ $errors->first('pais')}}</span>
                        @endif
                        </div>
                        <div class="form-group mb-3">
                            <textarea placeholder="Sobre ti" id="descripcion" class="form-control"
                                name="descripcion" rows="4"></textarea>
                        @if ($errors->has('descripcion'))
                            <span class="text-danger">{{ $errors->first('descripcion')}}</span>
                        @endif
                        </div>
                        <div class="d-grid mx-auto">
                            <button type="submit" class="btn btn-dark btn-block">Signup</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>
</main>
@endsection

