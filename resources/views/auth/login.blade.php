@extends('layouts.guest')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email">Correo</label>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="Escriba su correo amigo">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="Escriba su contyraseña amigo">
                            </div>
                            <hr>
                            <button class="btn btn-block btn-primary">Conectarme</button>
                            <p class="text-right"><a href="{{ route('register') }}">Registrarme</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
