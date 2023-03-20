@extends('tema.app')

@section('title', "Nueva Tarea")

@section('contenido')
    <h3>
        Registrar Tarea
    </h3>

    <form action="{{ route('tarea.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="InputNombre" class="form"> Nombre de la tarea</label>
                <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="..." value="{{ old('nombre') }}" >
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="finalizada" id="InputFinalizada" class="form-check-input" @checked( old('finalizada') )>
                    <label for="InputFinalizada" class="form-check-label">Finalizada</label>
                </div>
            </div>
            <div class="col-sm-4">
                <label for="SelectUrgencia" class="form-label">* Urgencia</label>
                <select name="urgencia" id="SelectUrgencia" class="form-select">
                    <option value="0">Baja</option>
                    <option value="1">Normal</option>
                    <option value="2">Alta</option>
                </select  >
                <script>
                    document.getElementById('SelectUrgencia').value = "{{old('urgencia')}}";
                </script>
            </div>
            <div class="col-sm-4">
                <label for="InputFechaLimite" class="form-label">* Fecha Limite</label>
                <input type="datetime-local" name="fecha_limite" id="InputFechaLimite" class="form-control" value="{{ old('fecha_limite') }}">
            </div>
            <div class="col-sm-12">
                <label for="TextAreaDescripcion" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="TextAreaDescripcion" cols="30" rows="10" class="form-control" value="{{ old('descripcion') }}"></textarea>
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
    </form>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endif

@endsection