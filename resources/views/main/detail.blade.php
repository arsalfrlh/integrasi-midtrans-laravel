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
        <h1 mt-2 md-2>Detail Barang</h1>
        
        <div class="card" style="width: 40rem;">
        <form action="/payment" method="POST">
            @csrf
            <div class="form-group">
              <label for="formGroupExampleInput">Nama Barang</label>
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ asset('images/rtx.jpeg') }}" alt="Card image cap">
              </div>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput">Nama Barang</label>
              <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Barang" value="RTX 4090" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Nama</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nama Pembeli" name="nama">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Pembeli" name="email">
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Harga</label>
              <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Harga" value="2000000" name="harga" readonly>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2">Jumlah</label>
              <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Jumlah Beli" name="jumlah">
            </div>
            <div class="form-group">
              <input type="submit" value="Beli" class="btn btn-success"> <a href="/index" class="btn btn-primary">Kembali</a>
            </div>
          </form>
        </div>
    </div>
</body>
</html>