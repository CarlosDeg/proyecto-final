<!-- EDITAR Reportes-->
<div    class="modal fade" id="editar-reporte-{{$reporte->idReportes}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.Reportes.update',$reporte->idReportes)}}" method="post" id="editform">
                    @csrf

                    <div class="form-group-sm ">


                        <div class="form-group">
                            <input name="NombreR" type="text" class="form-control" id=""  placeholder="reporte descripcion" value="{{$reporte->NombreR}}" required>

                        </div>
                    </div>
                    <div class="form-group">


                        <div class="form-group">
                            <input name="Castigo" type="text" class="form-control" id=""  placeholder="Dias" value="{{$reporte->Castigo}}" required>

                        </div>
                    </div>

                    <div class="form-group">

                        <select name="idMatricula" class="custom-select" id="idCarrera" value="{{$reporte->idMatricula}}"  required>
                            <option selected disabled value="">Seleccionar Alumno</option>
                            @foreach ( $alumnos as $alumno )
                                <option value="{{$alumno['idMatricula']}}">{{ $alumno['NombreA'] }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-md" type="submit">Submit form</button>
                    </div>



                </form>

            </div>

        </div>
    </div>
</div>

<!--fin del d-->
