<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PWNLab;


class LabController extends Controller
{
    public function test_labs(){
        $labs=PWNLab::getAll();
        dd($labs);
        return view('labs',['labs' => $labs]);
    }

}
