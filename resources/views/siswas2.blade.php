<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Data Nama</h1>
    <hr>
    <h2>Nama : {{$siswa}}</h2>
    <h2>NIM: {{$nim}}</h2>
    <h2>Nilai: {{$nilai}}</h2>
    @if ($nilai >= 75)
    <h2>Anda Lulus</h2>
    @else
    <h2>Anda Tidak Lulus</h2>
    @endif
</body>

</html>
