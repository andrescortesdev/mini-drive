<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>@yield('title') | MiniDrive</title>
    <style>
        body {
            background-color: #9ca3af;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('layouts.components.sidebar')
        </div>
        <div class="col-md-9">
            <br>
            <div class="row">
                <div class="col-md-3 col-md-offset-9">
                    <div class="panel panel-primary">
                        <div class="panel-heading" data-toggle="modal" data-target="#add-new-file">
                            <i class="fa fa-file" aria-hidden="true"></i> Subir archivo
                        </div>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>
    </div>
</div>

<!--Modar crear nueva carpeta -->
<div id="add-new-folder" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('folders.store') }}" method="post">
                    <input type="hidden" value="{{ request()->get('folder') }}" name="folder">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required name="name" id="name"
                               placeholder="Escriba el nombre de su carpeta">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>

    </div>
</div>

<!--Modar crear nueva archivo -->
<div id="add-new-file" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('files.store') }}" method="post" enctype="multipart/form-data">
                    <input type="hidden" value="{{ request()->get('folder') }}" name="folder">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" required name="name" id="name"
                               placeholder="Escriba el nombre de su archivo">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" required name="file" id="file">
                    </div>
                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>
