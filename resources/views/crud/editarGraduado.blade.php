<!-- EDITAR Graduado-->
<div    class="modal fade" id="editar-graduado-{{$graduado->idGraduado}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Graduado.update',$graduado->idGraduado)}}" method="post" id="editform">
                    @csrf

                    <div class="form-row ">
                        <div class="col-md-6 mb-3">
                            <input name="promedioGeneral" type="text" class="form-control" id=""  placeholder="Promedio" required>

                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <div class="form-check ">
                            <select name="idGrupo" class="custom-select" id="idCarrera" required>
                                <option selected disabled value="">Seleccionar Grupo</option>
                                @foreach ( $grupos as $grupo )
                                    <option value="{{$grupo['idGrupo']}}">{{ $grupo['Grupo'] }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <div class="form-check ">
                            <select name="idMatricula" class="custom-select" id="idCarrera" required>
                                <option selected disabled value="">Seleccionar Alumno</option>
                                @foreach ( $alumnos as $alumno )
                                    <option value="{{$alumno['idMatricula']}}">{{ $alumno['NombreA'] }}</option>
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
