<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--                    "https://app.stg.midtrans.com/snap/snap.js" stg digunakan untuk mode produksi|     mengambil data client key dari folder "config" dan file "midtrans.php" dari array key client_key-->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
</head>
<body>
    <div class="container">
        <h1>Data Pembayaran</h1>
        <div class="alert alert-primary col-md-4" role="alert">
            Token Pembayaran Anda
          </div>
        <input type="text" class="col-md-4 form-control" value="{{ $snapToken }}" readonly>
        <button id="pay-button" class="btn btn-success">Bayar!</button> <!-- menggunakan id="pay-button" untuk tombol payment -->
        
        <!-- id ini akan digunakan untuk menempatkan tampilan dari payment -->
          <div id="snap-container"></div>

        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button'); //menampilkan payment ketika menekan tombol id="pay-button"
            payButton.addEventListener('click', function () {
              // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
              // Also, use the embedId that you defined in the div above, here.
              window.snap.embed('{{ $snapToken }}', { //memanggil token tadi yg sudah dibuat dari controller 
                embedId: 'snap-container',
                onSuccess: function (result) {
                  /* You may add your own implementation here */
                  alert("payment success!"); console.log(result);
                },
                onPending: function (result) {
                  /* You may add your own implementation here */
                  alert("wating your payment!"); console.log(result);
                },
                onError: function (result) {
                  /* You may add your own implementation here */
                  alert("payment failed!"); console.log(result);
                },
                onClose: function () {
                  /* You may add your own implementation here */
                  alert('you closed the popup without finishing the payment');
                }
              });
            });
          </script>
    </div>
</body>
</html>