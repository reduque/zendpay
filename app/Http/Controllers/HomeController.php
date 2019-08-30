<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PWNTest;
use App\PWNCustomer;
use App\PWNLab;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('home');
    }
    public function aboutus(){
        return view('about');
    }
    public function faq(){
        return view('faq');
    }
    public function howitworks(){
        return view('howitworks');
    }
    public function privacypolicy(){
        return view('privacypolicy');
    }
    public function locator(){
        return view('locator');
    }
    public function payment_options(){
        return view('payment_options');
    }
    public function terms_and_conditions(){
        return view('terms_and_conditions');
    }
    public function refund_policy(){
        return view('refund_policy');
    }
    public function why_ltod(){
        return view('why_ltod');
    }
    



    public function testpwn()
    {
        //dd(PWNTest::getTypes());
        dd(PWNCustomer::getContactLogs(1063050));
        
    }

}
