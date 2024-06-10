<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
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

    function getMahasiswa(){
        $data = Mahasiswa::all();

        if(isset($data)){
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $data,
            ], 201); 
        }else{
            return response()->json([
                'success' => false,
                'message' => 'data not found',
                'data' => null,
            ], 401); 
        }


    }
}
