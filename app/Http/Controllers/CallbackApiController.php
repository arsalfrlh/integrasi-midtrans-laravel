<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CallbackApiController extends Controller
{
    public function callback(Request $request){
        $json = $request->all();
        $orderID = $json['order_id'];
        $statusCode = $json['status_code'];
        $grossAmount = $json['gross_amount'];
        $serverKey = config('midtrans.server_key');

        $signature = hash('sha512', $orderID . $statusCode . $grossAmount . $serverKey);

        if($signature !== $json['signature_key']){
            Log::warning("Signature tidak valid $orderID");
            return response()->json(['message' => 'Transaksi tidak valid', 'success' => false]);
        }

        Log::info("Data callback: ". json_encode($json));
        $data = [
            'status' => $json['transaction_status'],
            'metode_pembayaran' => $json['payment_type'],
            'jumlah' => $json['gross_amount'],
        ];
        return response()->json(['message' => "Transaksi berhasil ditemukan", "success" => true, 'data' => $data]);
    }
}
