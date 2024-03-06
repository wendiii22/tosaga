<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiController extends Controller
{
   // public function index(Request $request, $nik)
   // {
     //   $result = "Hai ". $request->nama." dengan NIK ".$nik." dan id ".$request->id;
       // return $result;
    //}
    public function index(Request $request, $warna)
    {
        $result = "jenis ". $request->nama." dengan Warna  ".$warna." no seri ".$request->seri;
        return $result;
    }
    
}

