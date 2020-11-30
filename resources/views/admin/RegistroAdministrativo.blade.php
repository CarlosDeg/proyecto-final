
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
    <title>Registro | Administrativo </title>

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
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-create-administrativos" >
            Nuevo
        </button><br><br>
        <div    class="modal fade" id="modal-create-administrativos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header navbar-cyan">
                        <h5 class="modal-title" id="exampleModalLabel">Administrativos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="RegistroAdministrativo" method="post" id="administrativos">
                        @csrf
                        <div class="modal-body ">

                            <input type="hidden"
                             name="idAdminitrativo" id="idAdminitrativo">



                  <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-address-book"></i></span>
                  </div>

                                <input name="NombreAd" type="text" class="form-control" id=""  placeholder="Nombre" required>

                            </div>
                        </div>


                            <div class="form-group">
                                <input name="ApellidoPAd" type="text" class="form-control" id="" placeholder="Apellido P" >

                            </div>

                            <div class="form-group">
                                <input name="ApellidoMAd" type="text" class="form-control" id="" placeholder="Apellido M" required>

                             </div>

                            <div class="form-group">

                                <input name="TelefonoAd" type="tel" class="form-control" id="" placeholder="Telefono" required>

                            </div>


                        <div class="form-group">
                            <input name="Puesto" type="text" class="form-control" id="" placeholder="Puesto" required>

                        </div>

                        <div class="form-group">

                            <input name="CorreoAd" type="email" class="form-control" id="" placeholder="Correo" required>

                        </div>
                        </div>


                        <div class="modal-footer ">
                            <button class="btn btn-lg navbar-teal" type="submit">Guardar</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>

        <!--Tabla para mostrar los datos de el registro
         /*

        kdkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk
        dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
        dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd

        -->
            <!--TABLA -->
            <table class="table table-striped table-dark table-hover">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido P</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                @foreach ( $Administrativo as  $Admin)
                    <tbody>

                    <tr>
                        <td>{{$Admin->idAdminitrativo}}</td>
                        <td>{{$Admin->NombreAd}}</td>
                        <td>{{$Admin->ApellidoPAd}}</td>
                        <td>{{$Admin->ApellidoMAd}}</td>
                        <td>{{$Admin->TelefonoAd}}</td>
                        <td>{{$Admin->Puesto}}</td>
                        <td>{{$Admin->CorreoAd}}</td>

                        <td>
                            <form method="POST" action="{{route('admin.RegistroAdministrativo.destroy',$Admin->idAdminitrativo) }}"  >
                                @method('DELETE')
                                @csrf
                                <div class='btn-group'>
                                    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#editar-Administrativo-{{$Admin->idAdminitrativo}}">
                                        Editar
                                    </button> &nbsp;  &nbsp; &nbsp;
                                    <button href=""  type="submit" class="btn btn-danger" onclick="return confirm('Seguro que deseas eliminar este registro')"> Eliminar</button>
                                </div></form></td>
                    </tr>
                    </tbody>
                    @include('crud.editarAdministrativo')
                @endforeach
            </table>


        </div>
    </div>

</body>
</html>
