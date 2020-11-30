<!-- EDITAR Semeestre-->
<div    class="modal fade" id="editar-semestre-{{$semest->idSemestre}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Semestre</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Semestre.update',$semest->idSemestre)}}" method="post" id="editform">
                    @csrf

                    <div class="form-row ">


                        <div class="col-md-6 mb-3">
                            <input name="Semestre" type="text" class="form-control" id=""  placeholder="cuatrimestre" value="{{$semest->Semestre}}"    requiredrequired>

                        </div>
                    </div>
                    <div class="col-md-6 mb-3">

                        <input name="CicloI" type="date" class="form-control" id="" placeholder="Inicio de curso" value="{{$semest->CicloI}}"    required >

                    </div></div>

            <div class="form-row">
                <div class="col-md-6 mb-3">

                    <input name="CicloF" type="date" class="form-control" id="" placeholder="Fin de curso" value="{{$semest->CicloF}}"    required>

                </div>

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
