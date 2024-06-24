<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/usuario.css">
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a class="btn btn-primary" href="{{ route('usuarios.create') }}" role="button">Crear Nuevo Usuario</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Email</th>
            <th scope="col">Dirección</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->nombres }}</td>
                <td>{{ $usuario->apellidos }}</td>
                <td>{{ $usuario->email }}</td>
                <td>{{ $usuario->direccion }}</td>
                <td>
                    <a class="btn btn-primary" role="button" href="{{ route('usuarios.show', $usuario->id) }}">Mostrar</a>
                    <a class="btn btn-primary" role="button" href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
      </table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>