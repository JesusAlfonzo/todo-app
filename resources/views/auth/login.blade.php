<h1>Formulario de inicio de sesion</h1>
<form action="{{ route('login.store') }}" method="post">
    @csrf
    <label>Correo Electronico</label>
    <input name='email' type="email">
    @error('email')
        {{ $message }}
    @enderror
    <br>
    <label>Contraseña</label>
    <input name='password' type="password">
    @error('password')
        {{ $message }}
    @enderror
    <br>
    <button type="submit">Iniciar Sesion</button>
</form>