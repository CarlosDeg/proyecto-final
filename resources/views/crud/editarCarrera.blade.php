<!-- EDITAR CARRERA-->
<div    class="modal fade" id="editar-carrera-{{$carrera->idCarrera}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Carreras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Carreras.update',$carrera->idCarrera)}}" method="post" id="editform">
                    @csrf
                    <div class="form-group">
                        <input name="Carrera" type="text" class="form-control" id="Carrera"  placeholder="Nombre de la carrera" value="{{$carrera->Carrera}}"    required>

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
