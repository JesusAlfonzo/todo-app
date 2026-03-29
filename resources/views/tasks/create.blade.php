<h1>Formulario para crear una tarea</h1>

<form action="{{ route('task.store') }}" method="post">
    @csrf
    <label>Titulo</label>
    <input name="title" type="text">
    <br>

    <label>Contenido</label>
    <input name="content" type="text">
    <br>

    <button type="submit">Crear Tarea</button>
</form>