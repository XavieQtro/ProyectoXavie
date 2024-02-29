@extends ('layouts.principal')

@section('content')

<form action="{{ route('Clase.store') }}" class="mt-4" method="POST">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="nombre">Nombre de la clase</label>
        <select id="nombre" name="Nombre_clase">
            <option value="Calistenia">Calistenia</option>
            <option value="Strongman">Strongman</option>
            <option value="Hipertrofia">Hipertrofia</option>
            <option value="Aerobicos">Aerobicos</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Instructor" class="form-label">Instructor</label>
        <input type="Text" class="form-control" id="Intructor" aria-describedby="Instructor" name="Instructor">
    </div>
    <div class="mb-3">
        <label for="Horario" class="form-label">Horario</label>
        <input type="Time" class="form-control" id="Horario" aria-describedby="Instructor" name="Horario">
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">
    <a href="{{route('Clase.index')}}" class="btn btn-secondary">Cancelar</a>
</form>



@endsection