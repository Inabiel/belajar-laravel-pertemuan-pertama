<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Ini Belajar Kalkulator</h1>
        <form method="POST" action={{route("form-reg")}}>
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Angka ke-1</label>
                <input type="text" class="form-control" name='angka1' id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">angka ke-2</label>
                <input type="text" class="form-control" name='angka2' id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" value="pertambahan" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Tambah
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" value="pengurangan" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Kurang
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" value="perkalian" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Kali
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="operator" value="pembagian" id="flexRadioDefault2">
                <label class="form-check-label" for="flexRadioDefault2">
                  Bagi
                </label>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
</body>

</html>
