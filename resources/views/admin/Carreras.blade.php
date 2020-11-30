
<!DOCTYPE html>

<!--loco el puga
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ccbca44be9.js" crossorigin="anonymous"></script>
    <title>Registro | Carreras </title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">


<!-- header   -->
<nav class="main-header navbar navbar-expand navbar-cyan navbar-light">


@extends('admin.principal')
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="../index3.html" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hogar</font></font></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contacto</font></font></a>
            </li>
        </ul>
</nav>

<!-- Modal -->

<div class="content-wrapper">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal-create-Carrer" >
        Crear
    </button>
    <div    class="modal fade" id="modal-create-Carrer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carreras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="Carreras" method="post" id="carreradata">
                    @csrf
                <div class="modal-body">

                    <input type="hidden" name="idCarrera" id="idCarrera">

                    <div class="form-group">
                        <input name="Carrera" type="text" class="form-control" id="Carrera"  placeholder="Nombre de la carrera" required>

                    </div>
                </div>


                        <div class="modal-footer">
                            <button class="btn btn-primary btn-md" type="submit">Guardar</button>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    <div class="container">
        <div class="col-md-7 offset-3 mt-4">

            @include('admin.flash-message')

            @yield('content')

        </div>
    </div>
    <!--TABLA -->
    <table id="laravel_crud" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        @foreach ( $carreras as  $carrera)
            <tbody>

            <tr>
                <td>{{$carrera->idCarrera}}</td>
                <td>{{$carrera->Carrera}}</td>
                <td><form method="POST" action="{{route('admin.Carreras.destroy',$carrera->idCarrera) }}"  >
                        @method('DELETE')
                        @csrf
                    <div class='btn-group'>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-carrera-{{$carrera->idCarrera}}">
                           Editar
                        </button> &nbsp;  &nbsp; &nbsp;
                        <button href="" id="eli" type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                    </div></form></td>

            </tr>
            </tbody>
            @include('crud.editarCarrera')
        @endforeach
    </table>

</div>

<script>
    $(document).ready(function () {
        $('#laravel_crud').DataTable({
            "paging": false // false to disable pagination (or any other option)
        });
        $('.dataTables_length').addClass('bs-select');
    });

</script>


</body>
</html>
