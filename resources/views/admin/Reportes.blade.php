

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
    <title>Registro | Reportes </title>

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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevos reportes</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header navbar-cyan">
                        <h5 class="modal-title" id="exampleModalLabel">Reportes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="Reportes" method="post" >
                            @csrf
                            <div class="form-group-sm ">


                                <div class="form-group">
                                    <input name="NombreR" type="text" class="form-control" id=""  placeholder="reporte descripcion" required>

                                </div>
                            </div>
                            <div class="form-group">


                                <div class="form-group">
                                    <input name="Castigo" type="text" class="form-control" id=""  placeholder="Dias" required>

                                </div>
                            </div>

                            <div class="form-group">

                                    <select name="idMatricula" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Alumno</option>
                                        @foreach ( $alumnos as $alumno )
                                            <option value="{{$alumno['idMatricula']}}">{{ $alumno['NombreA'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="text-center button-center">                           
                                <button class="btn btn-lg navbar-teal" type="submit">Guardar</button>
                            </div>
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
                    <th scope="col">Numero de reporte</th>
                    <th scope="col">NOMBRE DE REPORTE</th>
                    <th scope="col">Dias de castigo</th>
                    <th scope="col">Alumno</th>


                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $reportes as  $reporte)
                    <tbody>

                    <tr>
                        <td>{{$reporte->idReportes}}</td>
                        <td>{{$reporte->NombreR}}</td>
                        <td>{{$reporte->Castigo}}</td>
                        <td>{{$reporte->idMatricula}}</td>



                        <td>
                            <form method="POST" action="{{route('admin.Reportes.destroy',$reporte->idReportes) }}"  >
                                @method('DELETE')
                                @csrf
                                <div class='btn-group'>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-reporte-{{$reporte->idReportes}}">
                                        Editar
                                    </button> &nbsp;  &nbsp; &nbsp;
                                    <button href=""  type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                                </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarReportes')
                @endforeach
            </table>


        </div>
    </div>






</body>
</html>
