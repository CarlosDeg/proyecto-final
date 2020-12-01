
<!DOCTYPE html>

<!--loco el puga
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<div lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ccbca44be9.js" crossorigin="anonymous"></script>
    <title>Registro | Personal </title>

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
            <a href="../index3.html" class="nav-link"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Menu</font></font></a>
        </li>

    </ul>




</nav>
<!-- fin del header --><br>
<br>




    <div class="content-wrapper">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-create-personal" >
            Nuevo
        </button><br><br>
        <div    class="modal fade" id="modal-create-personal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header navbar-cyan">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo Personal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form action="RegistroPersonal" method="post" >
                            @csrf
                            <div class="form-row ">


                                <div class="col-md-6 mb-3">
                                    <input name="NombreP" type="text" class="form-control" id=""  placeholder="Nombre" required>

                                </div>
                                <div class="col-md-6 mb-3">

                                    <input name="ApellidoPP" type="text" class="form-control" id="" placeholder="Apellido P" >

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">

                                    <input name="ApellidoMP" type="text" class="form-control" id="" placeholder="Apellido M" required>

                                </div>

                                <div class="col-md-6 mb-2">

                                    <input name="CorreoP" type="text" class="form-control" id="" placeholder="Correo" required>

                                </div>
                            </div>
                            <div class="form-row">

                            <div class="col-md-6 mb-2">

                                <input name="DireccionP" type="text" class="form-control" id="" placeholder="DireccionP" required>

                            </div>

                            <div class="col-md-6 mb-2">

                                <input name="EdadP" type="number" class="form-control" id="" placeholder="EdadP" required>

                            </div>
                        </div>
                            <div class="form-group">

                                <input name="TelefonoP" type="number" class="form-control" id="" placeholder="TelefonoP" required>

                            </div>
                            <div class="text-center button-center">
                            <button class="btn btn-lg navbar-teal" type="submit">Guardar</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
            <!--TABLA -->
        <div class="row justify-content-center h-100">
            <div class="row-cols-xl-6 text-center">

            <table class="table table-striped table-dark table-hover ">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $personal as  $person)
                    <tbody>

                    <d>
                        <td>{{$person->idPersonal}}</td>
                        <td>{{$person->NombreP}}</td>
                        <td>{{$person->ApellidoPP}}</td>
                        <td>{{$person->ApellidoMP}}</td>
                        <td>{{$person->CorreoP}}</td>
                        <td>{{$person->DireccionP}}</td>
                        <td>{{$person->EdadP}}</td>
                        <td>{{$person->TelefonoP}}</td>
                    <td>

                        <form method="POST" action="{{route('admin.RegistroPersonal.destroy',$person->idPersonal) }}"  >
                            @method('DELETE')
                            @csrf
                            <div class='btn-group'>
                                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-personal-{{$person->idPersonal}}">
                                    Editar
                                </button> &nbsp;  &nbsp; &nbsp;
                                <button href=""  type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                            </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarPersonal')
                @endforeach
            </table>


        </div>
    </div>
    </div>


</body>
</html>
