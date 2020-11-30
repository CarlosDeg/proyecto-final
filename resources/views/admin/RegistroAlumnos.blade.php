
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/ccbca44be9.js" crossorigin="anonymous"></script>
    <title>Registro  | Alumnos </title>

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

<!--*********************************SE CREA EL FORMULARIO  ********************************************-->

    <div class="content-wrapper">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-create-Alumnos" >
            Nuevo Alumno
        </button><br><br>
        <div  class="modal fade" id="modal-create-Alumnos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Nuevos Alumnos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">

                        <form action="RegistroAlumnos" method="post" >
                            @csrf
                                <div class="row">
                                 <div class="form-group col-md-6">
                                    <input name="NombreA" type="text" class="form-control" id=""  placeholder="Nombre" required>
                                 </div>

                                    <div class="form-group col-md-6">
                                    <input name="ApellidoPA" type="text" class="form-control" id="" placeholder="Apellido P" >

                                    </div>
                                    <div class="form-group col-md-6">
                                    <input name="ApellidoMA" type="text" class="form-control" id="" placeholder="Apellido M" required>

                                </div>
                                    <div class="form-group col-md-6">
                                    <input name="CorreoA" type="text" class="form-control" id="" placeholder="Correo" required>
                                </div>
                                    <div class="form-group col-md-6">
                                    <input name="DireccionA" type="text" class="form-control" id="" placeholder="Direccion" required>
                                </div>
                                    <div class="form-group col-md-6">
                                        <select name="SexoA" type="number" class="form-control" id="" required class="selectpicker">
                                            <option > Masculino</option>
                                            <option >Femenino</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                    <input name="TipoSangre" type="text" class="form-control" id="" placeholder="Grupo sanguineo" required>
                                </div>
                                    <div class="form-group col-md-6">
                                    <input name="TelefonoT" type="tel" class="form-control" id="" placeholder="Tel" required>
                                </div>
                                    <div class="form-group col-md-6">
                                    <select name="Estatus" type="number" class="form-control" id="" required class="selectpicker">
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>

                                    </select>
                                    </div>

                                <button class="btn btn-md  btn-primary  btn-block" type="submit">Guardar</button>

                                </div>

                         </form>
                       </div>


                    </div>
                </div>
            </div>


            <!--TABLA -->
            <table class="table table-striped table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Tipo de Sangre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Estatus</th>

                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $Alumnos as  $Alumno)
                    <tbody>

                    <tr>
                        <td>{{$Alumno->idMatricula}}</td>
                        <td>{{$Alumno->NombreA}}</td>
                        <td>{{$Alumno->ApellidoPA}}</td>
                        <td>{{$Alumno->ApellidoMA}}</td>
                        <td>{{$Alumno->CorreoA}}</td>
                        <td>{{$Alumno->DireccionA}}</td>
                        <td>{{$Alumno->SexoA}}</td>
                        <td>{{$Alumno->TipoSangre}}</td>
                        <td>{{$Alumno->TelefonoT}}</td>
                        <td>{{$Alumno->Estatus}}</td>

                        <td>
                            <form method="POST" action="{{route('admin.RegistroAlumnos.destroy',$Alumno->idMatricula) }}"  >
                                @method('DELETE')
                                @csrf
                                <div class='btn-group'>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-Alumno-{{$Alumno->idMatricula}}">
                                        Editar
                                    </button>
                                    <button href=""  type="submit" class="btn btn-danger " onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                                </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarAlumno')
                @endforeach
            </table>


        </div>



</body>
</html>
