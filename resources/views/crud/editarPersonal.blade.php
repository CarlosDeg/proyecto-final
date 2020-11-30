<!-- EDITAR Personal-->
<div    class="modal fade" id="editar-personal-{{$person->idPersonal}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Personal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.RegistroPersonal.update',$person->idPersonal)}}" method="post" id="editform">
                    @csrf


                    <div class="form-row ">


                        <div class="col-md-6 mb-3">
                            <input name="NombreP" type="text" class="form-control" id=""  placeholder="Nombre" value="{{$person->NombreP}}"    required>

                        </div>
                        <div class="col-md-6 mb-3">

                            <input name="ApellidoPP" type="text" class="form-control" id="" placeholder="Apellido P" value="{{$person->ApellidoPP}}"    required >

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">

                            <input name="ApellidoMP" type="text" class="form-control" id="" placeholder="Apellido M" value="{{$person->ApellidoMP}}"    required>

                        </div>

                        <div class="col-md-6 mb-2">

                            <input name="CorreoP" type="text" class="form-control" id="" placeholder="Correo" value="{{$person->CorreoP}}"    required>

                        </div>
                    </div>

                    <div class="col-md-6 mb-2">

                        <input name="DireccionP" type="text" class="form-control" id="" placeholder="DireccionP" value="{{$person->DireccionP}}"    required>

                    </div>

                    <div class="col-md-6 mb-2">

                        <input name="EdadP" type="number" class="form-control" id="" placeholder="EdadP" value="{{$person->EdadP}}"    required>

                    </div>
                    <div class="col-md-6 mb-2">

                        <input name="TelefonoP" type="text" class="form-control" id="" placeholder="TelefonoP" value="{{$person->TelefonoP}}"    required>

                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-primary btn-md" type="submit">Guardar</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!--fin del d-->
