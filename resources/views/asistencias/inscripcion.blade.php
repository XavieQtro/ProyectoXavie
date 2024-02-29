@extends ('layouts.principal')

@section('content')
<form action="{{route ('Asistencia.store')}}" method="POST" class="mt-4">
    @csrf
    @method('POST')
    <label for="clientes">Selecciona un cliente:</label>
    <select id="clientes" name="cliente_id">
        @foreach ($clientes as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre }} CC:{{ $item->Identificacion }}</option>
        @endforeach
    </select>

    <div class="mb-3">
        <label for="Nombre">Selecciona la clase</label>
        <select id="Nombre" name="clase_id">
            @foreach ($clases as $item)
            <option value="{{ $item->id }}">{{ $item->Nombre_clase }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="Horario">Horario</label>
        <input type="text" class="form-control" id="Horario" name="Horario" disabled>
    </div>

    <a class="btn btn-outline-success" href="{{ route('Clase.store')}}">
        <i class="fa fa-plus" aria-hidden="true"></i>
    </a>
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