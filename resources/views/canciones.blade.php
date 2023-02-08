<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canciones</title>
</head>
<body>
    <h1>Canciones</h1>
    <ul>
        <!-- Con blade tenemos codigo php más abreviado -->
        @foreach ($canciones as $cancion)
            <li>{{ $cancion['nombre'] }} - {{$cancion['artista']}}</li>
        @endforeach
    </ul>
    
</body>
</html>