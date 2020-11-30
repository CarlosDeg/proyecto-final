<!-- EDITAR Personal-->
<div    class="modal fade" id="editar-materia-{{$materia->idMateria}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Materia</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Materias.update',$materia->idMateria)}}" method="post" id="editform">
                    @csrf


                    <div class="form-row ">


                        <div class="col-md-6 mb-3">
                            <input name="NombreM" type="text" class="form-control" id=""  placeholder="Materia" required>

                        </div>
                        <div class="col-md-6 mb-3">

                            <input name="Horas" type="time" class="form-control" id="" placeholder="Apellido P" >

                        </div>


                    <div class="modal-footer">
                        <button class="btn btn-primary btn-md" type="submit">Guardar</button>
                    </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!--fin del d-->
