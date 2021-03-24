<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <h1>Menampilkan Views!</h1>
    <h3>nama: {{$Siswa1}}</h3>
    <h3>nilai: {{$nilai}}</h3>
    <h3>
        @if ($nilai > 70)
        Lulus
        @else
        Tidak Lulus
        @endif
    </h3>
    @for ($i = 1; $i <= 5; $i++) <h5>Develop Framework {{$i}}</h5>
        @endfor
        @foreach ($listsis as $li)
        <li>{{$li}}</li>
        @endforeach
</body>

</html>
