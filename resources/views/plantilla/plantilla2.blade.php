<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horarios</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    @guest

        <nav class="navbar navbar-expand-md navbar-primary bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Horarios</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('acerca') }}" aria-current="page">Acerca de
                                <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contactanos') }}">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ayuda') }}">Ayuda</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        </li>
                    </ul>


                    <li class="nav-item" role="presentation">
                        <a href="{{ route('register') }}" class="nav-link">Registrar</a>
                    </li>


                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    @endguest
    @auth
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Horarios</a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Catalogos</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Periodos</a>
                                <a class="dropdown-item" href="#">Plazas</a>
                                <a class="dropdown-item" href="#">Puestos</a>
                                <a class="dropdown-item" href="#">Personal</a>
                                <a class="dropdown-item" href="#">Deptos</a>
                                <a class="dropdown-item" href="#">Carreras</a>
                                <a class="dropdown-item" href="#">Reticulas</a>
                                <a class="dropdown-item" href="#">Materias</a>
                                <a class="dropdown-item" href="#">Alumnos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle text-black" aria-expanded="false"
                                    data-bs-toggle="dropdown" type="button">Horarios</button>
                                <div class="dropdown-menu">
                                    <div class="d-flex">
                                        <a href="#" class="dropdown-item">Docentes</a>
                                        <a href="#" class="dropdown-item">Alumnos</a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle text-black" aria-expanded="false"
                                    data-bs-toggle="dropdown" type="button">Proyectos individuales</button>
                                <div class="dropdown-menu">
                                    <div class="d-flex">
                                        <a href="#" class="dropdown-item">Capacitación</a>
                                        <a href="#" class="dropdown-item">Asesorías Doc.</a>
                                        <a href="#" class="dropdown-item">Proyectos</a>
                                        <a href="#" class="dropdown-item">Material Didáctico</a>
                                        <a href="#" class="dropdown-item">Docencia e Inv.</a>
                                        <a href="#" class="dropdown-item">Asesoría Proyectos Ext.</a>
                                        <a href="#" class="dropdown-item">Asesoría a S.S.</a>
                                    </div>
                                    </< /div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Instrumentacion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tutorias</a>
                        </li>
                        <li class="nav-item dropdown">
                            <div class="dropdown-item">
                                <label for="periodo">Periodo:</label>
                                <select name="periodo" id="periodo">
                                    <option value="ene-jun-24">Ene-Jun 24</option>
                                    <option value="ago-dic-24">Ago-Dic 24</option>
                                    <option value="ene-jun-25">Ene-Jun 25</option>
                                </select>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                        </li>


                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </div>
        </nav>

    @endauth


</body>
@yield('contenido1')
@yield('contenido2')

</html>
