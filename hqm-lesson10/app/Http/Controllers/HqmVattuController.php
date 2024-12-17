<?php

namespace App\Http\Controllers;

use App\Models\HqmVattu;
use Illuminate\Http\Request;

class HqmVattuController extends Controller
{
    //
    public function list()
    {
        //lay du lieu
        // $hqmNhaCCs = HqmNhaCC::all();
        $hqmVattus = HqmVattu::paginate(10);
        return view('HqmVattu.list',['hqmVattus'=>$hqmVattus]);
    }
}
