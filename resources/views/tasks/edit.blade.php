<h1>Formulario para editar una tarea</h1>

<form action="/task/{{ $task->id }}" method="post">
    @method('PUT')
    @csrf

    <label>Titulo</label>
    <input name="title" type="text" value="{{ $task->title }}">
    <br>

    <label>Contenido</label>
    <input name="content" type="text" value="{{ $task->content  }}">
    <br>

    <button type="submit">Editar Tarea</button>
</form> 
