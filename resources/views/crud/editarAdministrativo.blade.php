<!-- EDITAR CARRERA-->
<div    class="modal fade" id="editar-Administrativo-{{$Admin->idAdminitrativo}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Administrativos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.RegistroAdministrativo.update',$Admin->idAdminitrativo)}}" method="post" id="editform">
                    @csrf
                    <div class="modal-body">



                        <div class="form-group">
                            <input name="NombreAd" type="text" class="form-control" id=""  placeholder="Nombre" value="{{$Admin->NombreAd}}"   required>


                        </div>
                        <div class="form-group">
                            <input name="ApellidoPAd" type="text" class="form-control" id="" placeholder="Apellido P" value="{{$Admin->ApellidoPAd}}" required  >

                        </div>

                        <div class="form-group">
                            <input name="ApellidoMAd" type="text" class="form-control" id="" placeholder="Apellido M" value="{{$Admin->ApellidoMAd}}" required>

                        </div>

                        <div class="form-group">

                            <input name="TelefonoAd" type="tel" class="form-control" id="" placeholder="Telefono" value="{{$Admin->TelefonoAd}}" required>

                        </div>


                        <div class="form-group">
                            <input name="Puesto" type="text" class="form-control" id="" placeholder="Puesto" value="{{$Admin->Puesto}}"  required>

                        </div>

                        <div class="form-group">

                            <input name="CorreoAd" type="text" class="form-control" id="" placeholder="Correo" value="{{$Admin->CorreoAd}}"  required>

                        </div>
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
