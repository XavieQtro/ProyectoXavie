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
        <a class="btn btn-outline-success" href="{{ route('Clase.create')}}">
            <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
    </div>
</div>


<table class="table table-dark">
    <thead>
        <tr>
            <th>Id Cliente.</th>
            <th>Nombre.</th>
            <th>Clase.</th>
            <th>Intructor</th>
            

        </tr>
    <tbody>
        @foreach ($clientes as $item)
        <tr>
            <td>{{$item->clientes[0]->id}}</td>
            <td>{{$item->clientes[0]->Nombre}}</td>
            <td>{{$item->Nombre_clase}}</td>
            <td>{{$item->Instructor}}</td>
           >
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