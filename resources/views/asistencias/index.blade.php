@extends ('layouts.principal')

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h5>Asistencias.</h5>
    </div>
    <div class="col">
        <a class="btn btn-outline-success" href="{{ route('Asistencia.create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </div>
</div>


<table class="table table-dark">
    <thead>
        <tr>
            <th>Nombre.</th>
            <th>Apellido.</th>
            <th>Clase a la que asiste.</th>
            <th>Tutor Asignado.</th>
            <th>Horario.</th>
            <th>Acciones.</th>
        </tr>
    <tbody>
        @foreach ($clases as $item)
        <tr>
            <td>Xavier</td>
            <td>Ramirez</td>

            <td>{{$item->Nombre_clase}}</td>
            <td>{{$item->Instructor}}</td>
            <td>{{$item->Horario}}</td>
            <td>
                <a class="btn btn-outline-danger btn-sm" href="">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </a>

                <a class="btn btn-outline-danger btn-sm" href="">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>

    </thead>
</table>
@endsection