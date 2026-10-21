<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aprendices</title>
</head>
<body>
    <h1>Listado de Aprendices</h1>

    @if (session('ok'))
        <p style="color: green;">{{ session('ok') }}</p>
    @endif

    <a href="{{ route('aprendices.create') }}">Nuevo aprendiz</a>

    <table border="1" cellpadding="6">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($aprendices as $a)
                <tr>
                    <td>{{ $a->id }}</td>
                    <td>{{ $a->nombre }}</td>
                    <td>{{ $a->documento }}</td>
                    <td>{{ $a->correo }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay aprendices registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $aprendices->links() }}
</body>
</html>