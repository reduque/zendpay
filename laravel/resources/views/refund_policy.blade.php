@extends('layouts.front')

@section('title','Categories')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Refund Policy</h1>
        <p>To be able to use our service you must abide by our refund policy:</p>
        <ul>
            <li>You may request to cancel your lab order within seven (7) days of the date of purchase to receive to receive a refund.</li>
            <li>Your refund will be reduced by $15 to cover the cost of the supervising doctor as well as the cost of processing your request to charge and refund your credit card.</li>
            <li>Unfortunately, after seven (7) days we will not be able to issue a refund, however we can issue a credit to your account (minus the $15 fee) to be used on future test orders.</li>
            <li>Purchased lab orders are valid for up to six (6) months from the date of purchase, after the six (6) months the order will be considered void and will disappear from the system, you can request a reinstatement of the order and you will be charged the mentioned $15 fee to cover the costs of this process.</li>
            <li>There cannot be any refunds If you already visited the lab and blood was drawn, however if LTOD can not process your specimen we will issue a 100% refund for the test(s) not performed.</li>
        </ul>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
