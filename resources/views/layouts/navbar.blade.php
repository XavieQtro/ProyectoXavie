<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="" alt="" width="30" height="24" class="d-inline-block align-text-top">
            {{ config('app.name')}}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('Cliente.index')}}">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Clase.index')}}">Clases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Asistencia.index')}}">Inscripción a clases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Informacion.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Mas.</a>
                </li>
            </ul>
        </div>
    </div>
</nav>