<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config; //install library untuk menggunakan midtrans "composer require midtrans/midtrans-php"
use Midtrans\Snap; //untuk membuat token dari midtrans
// buat manual file "midtrans.php" di folder config dan masukkan data midtransnya

class PaymentController extends Controller
{
    public function index(){
        return view('main.index');
    }

    public function detail(){
        return view('main.detail');
    }

    public function payment(Request $request){
        Config::$serverKey = config('midtrans.server_key'); //mengambil data di folder "config" dan file "midtrans.php" dan mengambil config di array key "server_key"
        Config::$clientKey = config('midtrans.client_key'); 
        Config::$isProduction = false; //true jika ingin menggunakan produksi
        Config::$isSanitized = true;
        Config::$is3ds = true;

        $total = $request->jumlah * $request->harga;
        $transaction = [ //membuat data yg di perlukan midtrans dan menyimpannya di variabel
            'transaction_details' => [
                'order_id' => 'ORDER- '.uniqid(), //membuat data dari nilai acak uniqid
                'gross_amount' => $total,
            ],
            'customer_details' => [
                'first_name' => $request->nama,
                'email' => $request->email,
            ],
        ];

        // Buat Snap Token
        $snapToken = Snap::getSnapToken($transaction); //membuat token midtrans dari variabel $transaction
        return view('main.transaksi', ['snapToken' => $snapToken]);
    }
}
