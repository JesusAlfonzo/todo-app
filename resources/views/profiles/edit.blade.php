<h1>Formulario para editar la informacion de tu perfil</h1>

<form action="/profile/{{ $user->id }}" method="post">
    @method('PUT')
    @csrf

    <label>Nombre</label>
    <input name="first_name" type="text" value="{{ $user->first_name }}">
    <br>

    <label>Apellido</label>
    <input name="last_name" type="text" value="{{ $user->last_name }}">
    <br>

    <button type="submit">Editar Informacion</button>
</form> 
