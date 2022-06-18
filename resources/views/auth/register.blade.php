@extends('layouts.guest')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        @if (isset($errors) && count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                   {{ $errors }}
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="names">Nombres</label>
                                <input type="text" name="names" id="names" class="form-control"
                                       placeholder="Escriba sus nombres amigo">
                            </div>
                            <div class="form-group">
                                <label for="lastnames">Apellidos</label>
                                <input type="text" name="lastnames" id="lastnames" class="form-control"
                                       placeholder="Escriba sus apellidos amigo">
                            </div>
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
                            <button class="btn btn-block btn-primary">Registrarme</button>
                            <p class="text-right"><a href="{{ route('login') }}">Autenticarme</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
