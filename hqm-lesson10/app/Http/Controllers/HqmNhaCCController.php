<?php

namespace App\Http\Controllers;

use App\Models\HqmNhaCC;
use Illuminate\Http\Request;

class HqmNhaCCController extends Controller
{
    // list - create - edit - delete
    public function list()
    {
        //lay du lieu
        // $hqmNhaCCs = HqmNhaCC::all();
        $hqmNhaCCs = HqmNhaCC::paginate(10);
        return view('HqmNhaCC.list',['hqmNhaCCs'=>$hqmNhaCCs]);
    }
}
