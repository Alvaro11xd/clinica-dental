<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pacientes</h1>
    @foreach ($pacientes as $paciente)
        <p>{{$paciente->id}} - {{$paciente->name}}</p>
    @endforeach
</body>
</html>