@guest
    <p>Hola, si lees esto es que no estás autenticado.</p>
@endguest

@auth
    <h1>Hola bienvenido</h1>

    <form action="{{ route('login.destroy') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesion</button>
    </form>
@endauth