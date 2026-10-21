<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Aprendiz</title>
</head>
<body>
    <h1>Crear Aprendiz</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('aprendices.store') }}">
        @csrf

        <p>
            <label>Nombre</label><br>
            <input type="text" name="nombre" value="{{ old('nombre') }}">
        </p>
        <p>
            <label>Documento</label><br>
            <input type="text" name="documento" value="{{ old('documento') }}">
        </p>
        <p>
            <label>Correo</label><br>
            <input type="email" name="correo" value="{{ old('correo') }}">
        </p>
        <p>
            <label>Ficha ID (opcional)</label><br>
            <input type="number" name="ficha_id" value="{{ old('ficha_id') }}">
        </p>

        <button type="submit">Guardar</button>
        <a href="{{ route('aprendices.index') }}">Cancelar</a>
    </form>
</body>
</html>