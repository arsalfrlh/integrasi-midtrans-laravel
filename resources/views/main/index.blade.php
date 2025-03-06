<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 mt-2 mb-2>Toko Online</h1>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/rtx.jpeg') }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">RTX 4090</h5>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Merk: Nvdia</li>
              <li class="list-group-item">Stok: 5</li>
              <li class="list-group-item">Harga: 2000000</li>
            </ul>
            <div class="card-body">
              <a href="/detail" class="btn btn-success">Beli</a>
            </div>
          </div>
    </div>
</body>
</html>