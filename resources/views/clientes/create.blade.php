@extends ('layouts.principal')

@section('content')
<form action="{{route ('Cliente.store')}}" method="POST" id="formulario">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="ID_cliente" class="form-label">Ingresar numero de identificación</label>
        <input type="text" class="form-control" id="ID_cliente" aria-describedby="ID_cliente" name="Identificacion">
    </div>
    <div class="mb-3">
        <label for="Nombre" class="form-label">Ingresar Nombre</label>
        <input type="text" class="form-control" id="Nombre" aria-describedby="Nombre" name="Nombre">
    </div>
    <div class="mb-3">
        <label for="Apellido" class="form-label">Ingresar Apellido</label>
        <input type="text" class="form-control" id="Apellido" aria-describedby="Apellido" name="Apellido">
    </div>
    <div class="mb-3">
        <label for="Fecha_nacimiento" class="form-label">Ingresar Fecha nacimiento</label>
        <input type="date" class="form-control" id="Fecha_nacimiento" aria-describedby="Fecha_nacimiento" name="Fecha_nacimiento">
    </div>
    </div>
    <div class="mb-3">
        <label for="Correo_electrico" class="form-label">Ingresar correo</label>
        <input type="text" class="form-control" id="Correo_electrico" aria-describedby="Correo_electrico" name="Correo_electrico">
    </div>
    </div>
    <div class="mb-3">
        <label for="Telefono" class="form-label">Ingresar Telefono</label>
        <input type="text" class="form-control" id="Telefono" aria-describedby="Telefono" name="Telefono">
    </div>
    </div>
    <div class="mb-3">
        <label for="Fecha_inscripcion" class="form-label">Ingresar Fecha inscripcion</label>
        <input type="date" class="form-control" id="Fecha_inscripcion" aria-describedby="Fecha_inscripcion" name="Fecha_inscripcion">
    </div>
    <input class="btn btn-primary" type="submit" value="Guardar">
    <a href="{{route('Asistencia.index')}}" class="btn btn-secondary">Cancelar</a>
</form>




@endsection