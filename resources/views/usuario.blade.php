<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
</head>
<body>
    <h1>Usuarios</h1>
    <a href="{{ route('usuarios.create') }}">Crear Nuevo Usuario</a>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <table>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Acciones</th>
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
                        <a href="{{ route('usuarios.show', $usuario->id) }}">Mostrar</a>
                        <a href="{{ route('usuarios.edit', $usuario->id) }}">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>