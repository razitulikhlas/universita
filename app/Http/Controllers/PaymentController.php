<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\PaymentMahasiswa;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //

    function insertPayment(Request $request){

        $id = $request->input("nik_petugas");
        $id_mahasiswa = $request->input("");
        $nomor_tagihan = "random";
        $keterangan = $request->input("keterangan");
        $biaya_admin = $request->input("biaya_admin");
        $biaya = $request->input("biaya");

        $data = $request->only([
            'nik_petugas',
            'id_mahasiswa',
            'nomor_tagihan',
            'keterangan',
            'biaya_admin',            
            'biaya',
        ]);

        $insert = PaymentMahasiswa::create($data);

        if(isset($insert)){
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $data,
            ], 201); 
        }else{
            return response()->json([
                'success' => false,
                'message' => 'gagal memasukan data',
                'data' => null,
            ], 401); 
        }
    }
}
