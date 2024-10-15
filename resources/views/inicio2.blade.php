@extends("plantilla/plantilla2")

@section("contenido1")
<div class="container-xl text-center">

    <h1>Descripcion del sistema</h1>

<body>
    Este sera un sistema que te presentara horarios de los alumnos asi como los maestros que estan involucrados
</body>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="text-center mt-5 bg-dark text-primary">
    <h2>Email y usuario autenticado:</h2>
    <br>
    @auth
    <h3>Usuario: {{ Auth::user()->name }}</h3>
    
    <h3>Email: {{ Auth::user()->email }}</h3>
    
    @endauth
</footer>
@endsection

