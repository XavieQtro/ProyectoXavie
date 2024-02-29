@extends ('layouts.principal')

@section('navbar')
@include('layouts.navbar')
@endsection

@section('content')
<div class="row">
    <div class="col">
        <h5>Clases disponibles.</h5>
    </div>
    <div class="col">
        <a class="btn btn-outline-success" href="{{ route('Clase.create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </div>
</div>


<table class="table table-dark">
    <thead>
        <tr>
            <th>Id Clase.</th>
            <th>Clase.</th>
            <th>Horario.</th>
            <th>Intructor</th>
        </tr>
    <tbody>
        @foreach ($clases as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Nombre_clase}}</td>
            <td>{{$item->Horario}}</td>
            <td>{{$item->Instructor}}</td>

            <td>
                <a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </>
                <a class="btn btn-outline-danger btn-sm" href="">
                    <i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>

    </thead>
</table>
@endsection