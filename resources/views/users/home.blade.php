@guest
    <p>Hola, si lees esto es que no estás autenticado.</p>
@endguest

@auth
    <h1>Hola bienvenido</h1>

    <button><a href="{{ route('profile.index') }}">Perfil del usuario</a></button>


    <form action="{{ route('login.destroy') }}" method="POST">
        @csrf
        <button type="submit">Cerrar Sesion</button>
    </form>

    <button><a href="{{ route('task.create') }}">Crear una tarea</a></button>

    <br>

    <table>
        <tr>
            <th>Tarea</th>
            <th>Contenido</th>
            <th>Acciones</th>
        </tr>
        @foreach ($Tasks as $task)
            <tr>

                <td>{{ $task->title }}</td>
                <td>{{ $task->content }}</td>
            </tr>
            <tr>
                <td>
                    <form action="{{ route('task.destroy', $task) }} method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit">eliminar nota</button>
                    </form>

                    <button><a href="/task/{{ $task->id }}/edit">Editar Tarea</a></button>
                    <button><a href="/task/{{ $task->id }}/show">Ver Tarea</a></button>
                 

                </td>
            </tr>
        @endforeach
    </table>

    <br>
@endauth
