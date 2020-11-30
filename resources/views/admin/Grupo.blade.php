
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
    <title>Registro | Grupo </title>

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
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-create-grupo" >
            Nuevo
        </button><br><br>
        <div    class="modal fade" id="modal-create-grupo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevos grupos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="card-body">
                        <form action="Grupo" method="post" >
                            @csrf
                            <div class="form-row ">
                                <div class="col-md-6 mb-3">
                                    <input name="Grupo" type="text" class="form-control" id=""  placeholder="Grupo" required>

                                </div>
                                <div class="col-md-6 mb-3">

                                    <input name="FechaI" type="date" class="form-control" id="FechaI" value="" placeholder="FechaI" required>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">

                                    <input name="FechaF" type="date" class="form-control" id="FechaF" placeholder="FechaF" required>

                                </div>


                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <div class="form-check ">
                                    <select name="idCarrera" class="custom-select" id="idCarrera" required>
                                        <option selected disabled value="">Seleccionar Carrera</option>
                                        @foreach ( $carreras as $carrera )
                                            <option value="{{$carrera['idCarrera']}}">{{ $carrera['Carrera'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="form-group col-md-6 mb-3">
                                <div class="form-check ">
                                    <select name="idSemestre" class="custom-select" id="idSemestre" required>
                                        <option selected disabled value="">Seleccionar Semestre</option>
                                        @foreach ( $semestres as $semestre )
                                            <option value="{{$semestre['idSemestre']}}">{{ $semestre['Semestre'] }}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <button class="btn btn-dark btn-sm" type="submit">Submit form</button>

                        </form>


                    </div>

                </div>
            </div>
        </div>
            <!--TABLA -->
            <table class="table table-striped table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">idGrupo</th>
                    <th scope="col">Grupo</th>
                    <th scope="col">FechaI</th>
                    <th scope="col">FechaF</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Semestre</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $grupos as  $grupo)

                    <tbody>

                    <tr>
                        <td>{{$grupo->idGrupo}}</td>
                        <td>{{$grupo->Grupo}}</td>
                        <td>{{$grupo->FechaI}}</td>
                        <td>{{$grupo->FechaF}}</td>

                        <td>{{$grupo->idCarrera}}</td>
                        <td>{{$grupo->idSemestre}}</td>
                        <td>
                            <form method="POST" action="{{route('admin.Grupo.destroy',$grupo->idGrupo) }}"  >
                                @method('DELETE')
                                @csrf
                                <div class='btn-group'>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-grupo-{{$grupo->idGrupo}}">
                                        Editar
                                    </button> &nbsp;  &nbsp; &nbsp;
                                    <button href=""  type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                                </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarGrupo')
                @endforeach

            </table>



    </div>
</div>
</div>



</body>
</html>
