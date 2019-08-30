<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PWNTest;

class TestController extends Controller
{
    public function test_types(){
        $tests=PWNTest::getTypes();
        return view('tests',['titulo' => 'test types','tests' => $tests]);
    }
    public function test_groups(){
        $tests=PWNTest::getGroups();
        $tests=$tests['test_types']['test_type'];
        //dd($tests);
        return view('tests',['titulo' => 'test groups','tests' => $tests]);
    }

}
