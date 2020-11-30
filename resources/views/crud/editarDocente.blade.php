<!-- EDITAR CARRERA-->
<div    class="modal fade" id="editar-docente-{{$docent->idCedula}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Docentes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.RegistroDocente.update',$docent->idCedula)}}" method="post" id="editform">
                    @csrf
                    <div class="modal-body">


                        <div class="form-row ">


                            <div class="col-md-6 mb-3">
                                <input name="NombreD" type="text" class="form-control" id=""  placeholder="Nombre" value="{{$docent->NombreD}}" required>

                            </div>
                            <div class="col-md-6 mb-3">

                                <input name="ApellidoPD" type="text" class="form-control" id="" placeholder="Apellido P" value="{{$docent->ApellidoPD}}" required >

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">

                                <input name="ApellidoM" type="text" class="form-control" id="" placeholder="Apellido M" value="{{$docent->ApellidoM}}" required>

                            </div>

                            <div class="col-md-6 mb-2">

                                <input name="CorreoD" type="text" class="form-control" id="" placeholder="Correo" value="{{$docent->CorreoD}}" required>

                            </div>
                        </div>

                        <div class="col-md-6 mb-2">

                            <input name="Telefono" type="number" class="form-control" id="" placeholder="Telefono" value="{{$docent->Telefono}}" required>

                        </div>

                        <div class="col-md-6 mb-2">

                            <input name="Cedula" type="text" class="form-control" id="" placeholder="cedula" value="{{$docent->Cedula}}" required>

                        </div>

                        <select name="Estatus" type="number" class="form-control" id="" value="{{$docent->Estatus}}"  required class="selectpicker">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>

                        </select>
                        <button class="btn btn-dark btn-sm" type="submit">Guardar</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!--fin del d-->
