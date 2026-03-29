<h1>Informacion del usuario</h1>


<table>
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
    </tr>
    <tr>
        <td>{{ $user->first_name }}</td>
        <td>{{ $user->last_name }}</td>
    </tr>
</table>

<button><a href="/profile/{{ $user->id }}/edit">Editar Informacion</a></button>

<form action="{{ route('profile.destroy', $user) }} method="post">
    @method('DELETE')
    @csrf
    <button type="submit">Eliminar Cuenta</button>
</form>
