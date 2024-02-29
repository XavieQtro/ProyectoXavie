@extends ('layouts.principal')

@section('content')

<form action="">



    <label for="clientes">Selecciona un cliente:</label>
    <select id="id">
        @foreach ($clientes as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre_clase }}</option>
        @endforeach
    </select>

    <div class="mb-3">
        <select id="Nombre_clase" name="clase_id[]">
        @foreach ($clases as $item)
        <option value="{{ $item->id }}">{{ $item->Nombre_clase }}</option>

        @endforeach
        </select>
    </div>
    <a class="btn btn-outline-success" href="{{ route('Clase.store')}}">
        <i class="fa fa-plus" aria-hidden="true"></i>
    </a>

</form>



@endsection