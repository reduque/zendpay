@extends('layouts.front')

@section('title','Categories')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Payment Options</h1>
        <p>LTOD gladly accepts all major credit cards, PayPal, Gift Cards, Money Orders, Cashiers Checks (No personal checks please).</p>
        <p>For Gift Cards, Money Orders and Cashiers Checks, please mail us the exact amount of the value of the test(s) you wish to pay for, please include in the same envelope the following information:</p>
        <p>Name of individual being tested, Address, Date of Birth, Gender, Phone Number, the lab location of your preference, The test(s) you would like to be performed, The email address where to send the lab order.</p>
        <p>Mail everything to:</p>
        <p>Lab Test On Demand, 18727 West Dixie Hwy, Aventura, FL 33180.</p>
        <p>We suggest you use a traceable package such as FedEx, UPS, or the delivery confirmation service of the USPS.</p>
        <p>Cashier’s Checks / Money orders should be payable to Lab Test On Demand. </p>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
