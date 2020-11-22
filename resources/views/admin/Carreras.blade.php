
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Ajax CRUD Example Tutorial with - CodingDriver</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
</head>
</head>
<body class="hold-transition sidebar-mini">


<!-- header   -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">


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



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user1-128x128.jpg" alt="Avatar de usuario" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Brad Diesel
                                    </font></font><span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Llámame cuando puedas ...</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user8-128x128.jpg" alt="Avatar de usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        John Pierce
                                    </font></font><span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Recibí tu mensaje hermano</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="../dist/img/user3-128x128.jpg" alt="Avatar de usuario" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        Silvestre Nora
                                    </font></font><span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">El tema va aqui</font></font></p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> hace 4 horas</font></font></p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ver todos los mensajes</font></font></a>
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">15 Notifications</span>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-envelope mr-2"></i> 4 new messages
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-users mr-2"></i> 8 friend requests
                    <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <i class="fas fa-file mr-2"></i> 3 new reports
                    <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
<!-- fin del header --><br>

<!-- Modal -->
<div class="content-wrapper">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Nuevos carreras</button>
    <div    class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Carreras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Carreras" method="post" id="carreradata">
                        @csrf
                        <input type="hidden" id="idCarrera" name="idCarrera" value="">

                        <div class="form-group">
                            <input name="Carrera" type="text" class="form-control" id="Carrera"  placeholder="Nombre de la carrera" required>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-md" type="submit">Guardar</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!--TABLA -->
    <div class="row">
        <div class="col-12">
    <table class="table table-striped table-bordered" id="laravel_crud">
        <thead>
        <tr>
            <th scope="col">IdCarrera</th>
            <th scope="col">Carrera</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        @foreach ( $carreras as  $carrera)
            <tbody>

            <tr>
                <td>{{ $carrera->idCarrera }}</td>
                <td>{{$carrera->Carrera}}</td>
                <td>
                    <div class='btn-group'>
                        <a href="#" id="editarCarrera" class=" btn btn-primary edit-btn " data-toggle="modal" data-target="#exampleModal" data-id="{{ $carrera->idCarrera }}">
                            Editar    </a>
                        <a href="#"  class="btn btn-danger">
                            Eliminar </a></div></td>

            </tr>
            </tbody>
        @endforeach
    </table>

        </div>
    </div>
    <!-- EDITAR CARRERA-->
    <div    class="modal fade" id="editarmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Carreras</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Carreras" method="post" id="editform">
                        @csrf
                        @method('put')
                        <input type="hidden" id="idCarrera" name="idCarrera" value="">

                        <div class="form-group">
                            <input name="Carrera" type="text" class="form-control" id="Carrera"  placeholder="Nombre de la carrera" required>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-md" type="submit">Guardar</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<!--fin del d-->
</div>


</body>
<script>
    $('#laravel_crud').DataTable();
    function addPost() {
        $("#idCarrera").val('');
        $('#exampleModal').modal('show');
    }

    function editPost(event) {
        var id  = $(event).data("id");
        let _url = `/Carreras/${id}`;
        $('#titleError').text('');
        $('#descriptionError').text('');

        $.ajax({
            url: _url,
            type: "GET",
            success: function(response) {
                if(response) {
                    $("#post_id").val(response.id);
                    $("#title").val(response.title);
                    $("#description").val(response.description);
                    $('#post-modal').modal('show');
                }
            }
        });
    }

    function createPost() {
        var title = $('#title').val();
        var description = $('#description').val();
        var id = $('#post_id').val();

        let _url     = `/Carreras`;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: "POST",
            data: {
                id: id,
                title: title,
                description: description,
                _token: _token
            },
            success: function(response) {
                if(response.code == 200) {
                    if(id != ""){
                        $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                        $("#row_"+id+" td:nth-child(3)").html(response.data.description);
                    } else {
                        $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
                    }
                    $('#title').val('');
                    $('#description').val('');

                    $('#post-modal').modal('hide');
                }
            },
            error: function(response) {
                $('#titleError').text(response.responseJSON.errors.title);
                $('#descriptionError').text(response.responseJSON.errors.description);
            }
        });
    }

    function deletePost(event) {
        var id  = $(event).data("idCarrera");
        let _url = `/Carreras/${id}`;
        let _token   = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: _url,
            type: 'DELETE',
            data: {
                _token: _token
            },
            success: function(response) {
                $("#row_"+id).remove();
            }
        });
    }

</script>
</html>
