@extends ('layouts.principal')

@section('content')
<form action="{{route ('Clase.store')}}" method="POST" id="formulario">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="clientes">Selecciona un cliente:</label>
        <select id="id">
            @foreach ($clienteclases as $item)
            <option value="{{ $item->id }}">{{ $item }}</option>

            @endforeach
        </select>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Ingresar Nombre</label>
            <input type="text" class="form-control" id="Nombre" aria-describedby="Nombre" name="Nombre_clase">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Ingresar Apellido</label>
            <input type="text" class="form-control" id="Apellido" aria-describedby="Apellido" name="Apellido">
        </div>
        <div class="mb-3">
            <select id="Instructor" name="Instructor">
                <option value="Prueba calistenia">Calistenia</option>
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
    
        </div>
        <input class="btn btn-primary" type="submit" value="Guardar">
        <a href="{{route('Asistencia.index')}}" class="btn btn-secondary">Cancelar</a>
</form>



@push("scriptjs")
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Manejar el evento de cambio en el select
    var selectClientes = document.getElementById('id');
    var inputNombre = document.getElementById('Nombre');
    var inputApellido = document.getElementById('Apellido');

    selectClientes.addEventListener('change', function() {
        // Obtener el valor seleccionado
        var selectedCliente = selectClientes.options[selectClientes.selectedIndex].text;

        // Dividir el valor en Nombre y Apellido
        var parts = selectedCliente.split(' ');

        // Asignar los valores a los campos de entrada "Nombre" y "Apellido"
        inputNombre.value = parts[0] || '';
        inputApellido.value = parts[1] || '';
    });
});
</script>
@endpush
@endsection