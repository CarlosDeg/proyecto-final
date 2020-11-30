<!-- EDITAR Personal-->
<div    class="modal fade" id="editar-grupo-{{$grupo->idGrupo}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Grupo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Grupo.update',$grupo->idGrupo)}}" method="post" id="editform">
                    @csrf

                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <input name="Grupo" type="text" class="form-control" id=""  placeholder="Grupo" value="{{$grupo->Grupo}}"    required>

                        </div>
                        <div class="col-md-6 mb-3">

                            <input name="FechaI" type="date" class="form-control" id="FechaI" value="" placeholder="FechaI" value="{{$grupo->FechaI}}"    required>

                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">

                            <input name="FechaF" type="date" class="form-control" id="FechaF" placeholder="FechaF" value="{{$grupo->FechaF}}"    required>

                        </div>


                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <div class="form-check ">
                            <select name="idCarrera" class="custom-select" id="idCarrera" value="{{$grupo->idCarrera}}"    required>
                                <option selected disabled value="">Seleccionar Carrera</option>
                                @foreach ( $carreras as $carrera )
                                    <option value="{{$carrera['idCarrera']}}">{{ $carrera['Carrera'] }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <div class="form-check ">
                            <select name="idSemestre" class="custom-select" id="idSemestre" value="{{$grupo->idSemestre}}"    required>
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

<!--fin del d-->
