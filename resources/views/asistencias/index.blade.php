@extends ('layouts.principal')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
<div class="row">
    <div class="col"><h5>Asistencias.</h5></div>
        <div class="col">
        <a class="btn btn-outline-success" href="{{ route('Asistencia.create')}}" >
        <i class="fa fa-plus" aria-hidden="true"></i>
        </a>
        </div>
</div>
            
    
    <table class="table table-dark">
        <thead>
            <tr>
                <th>Id.</th>
                <th>Nombre.</th>
                <th>Apellido.</th>
                <th>F nacimiento.</th>
                <th>Telefono.</th>
                <th>Correo.</th>
                <th>F inscripcion.</th>
                
                
            </tr>
            <tbody>
                @foreach ($clientes as $item)
                <tr>
                    <td>{{$item->Identificacion}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Apellido}}</td>
                    <td>{{$item->Fecha_nacimiento}}</td>
                    <td>{{$item->Telefono}}</td>
                    <td>{{$item->Correo_electrico}}</td>
                    <td>{{$item->Fecha_inscripcion}}</td>
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