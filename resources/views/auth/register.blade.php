<h1>Formulario de registro</h1>
<form action="{{ route('register.store') }}" method="post">
    @csrf
    <label>Nombre</label>
    <input name='first_name' type="text">
    <br>
    <label>Apellido</label>
    <input name='last_name' type="text">
    <br>
    <label>Correo Electronico</label>
    <input name='email' type="email">
    <br>
    <label>Contraseña</label>
    <input name='password' type="password">
    <br>
    <label>Confirme su Contraseña</label>
    <input name='password_confirmation' type="password">
    <button type="submit">Registrar</button>
</form>