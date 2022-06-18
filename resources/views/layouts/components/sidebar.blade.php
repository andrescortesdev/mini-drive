<br>
<div class="panel panel-default">
    <br>
    <p class="text-center">
        <img width="50px" class="img-circle"
             src="https://tif-picture.herokuapp.com/svg?name={{ Auth::user()->names  }} {{ Auth::user()->lastnames }}"
             alt="">
        <br>
        {{ Auth::user()->names  }} {{ Auth::user()->lastnames }} <br>
        <small>{{ Auth::user()->email }}</small>
    </p>
</div>

<div class="panel panel-primary">
   <div class="panel-heading" data-toggle="modal" data-target="#add-new-folder" >
       <i class="fa fa-folder" aria-hidden="true"></i>  Crear nueva carpeta
   </div>
</div>
<div class="panel panel-danger">
    <div class="panel-heading">
        <i class="fa fa-power-off" aria-hidden="true"></i> Cerrar sesion
    </div>
</div>
