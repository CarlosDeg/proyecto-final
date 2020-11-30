<!-- EDITAR CARRERA-->
<div    class="modal fade" id="editar-Alumno-{{$Alumno->idMatricula}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Alumnos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.RegistroAlumnos.update',$Alumno->idMatricula)}}" method="post" id="editform">
                    @csrf
                    <div class="modal-body">

                        <div class="col-md-5">
                            <input name="NombreA" type="text" class="form-control" id=""  placeholder="Nombre" value="{{$Alumno->NombreA}}"  required>
                        </div>
                        <div class="col-md-5">
                            <input name="ApellidoPA" type="text" class="form-control" id="" placeholder="Apellido P" value="{{$Alumno->ApellidoPA}}" required >

                        </div>
                        <div class="col-md-5">
                            <input name="ApellidoMA" type="text" class="form-control" id="" placeholder="Apellido M" value="{{$Alumno->ApellidoMA}}"  required>

                        </div>
                        <div class="col-md-5">
                            <input name="CorreoA" type="text" class="form-control" id="" placeholder="Correo" value="{{$Alumno->CorreoA}}"  required>
                        </div>
                        <div class="col-md-5">
                            <input name="DireccionA" type="text" class="form-control" id="" placeholder="Direccion" value="{{$Alumno->DireccionA}}"  required>
                        </div>
                        <div class="col-md-5">
                            <input name="SexoA" type="text" class="form-control" id="" placeholder="Sexo" value="{{$Alumno->SexoA}}"  required>
                        </div>
                        <div class="col-md-5">
                            <input name="TipoSangre" type="text" class="form-control" id="" placeholder="Grupo sanguineo" value="{{$Alumno->TipoSangre}}" required>
                        </div>
                        <div class="col-md-5">
                            <input name="TelefonoT" type="tel" class="form-control" id="" placeholder="Tel" value="{{$Alumno->TelefonoT}}"  required>
                        </div>

                        <select name="Estatus" type="number" class="form-control" id="" value="{{$Alumno->Estatus}}"  required class="selectpicker">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>

                        </select>
                        <div class="modal-footer">
                            <button class="btn btn-lg btn-primary" type="submit">Guardar</button>
                        </div>



                    </div>
                </form>


            </div>

        </div>
    </div>
</div>

<!--fin del d-->
