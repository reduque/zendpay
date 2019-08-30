@extends('layouts.front')

@section('title','About Us')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Lab Locator</h1>
        <p>Lab Test On Demand sells routine lab tests through Quest Diagnostics laboratories. Enter your zip code below for a listing of labs near you and click “Select Lab” to view more location details.</p>
        <p>Do you want to schedule a lab appointment?</p>
        <p>Walk ins are always welcome at your lab and appointments are optional but always recommended if you want to get in and out of the lab as fast as possible. </p>
        <p>Please keep in mind that labs are very busy in the morning when most people are fasting. Just click “Select Lab” and follow the on-screen prompts to make your appointment. Be sure to bring the lab appointment confirmation page along with the lab order. Please call the lab to verify their business hours as we do not guarantee their accuracy and are subject to change.</p>
        <p>Also remember to follow all test preparation instructions of each test ordered.</p>
        <p>On the day of your test, you will submit your specimens (blood and/or urine) at the lab center that you selected. Your samples will be processed by the lab facility and, as soon as your results are available, you will be notified electronically so that you can access them.</p>
        <p><b>Lab Test On Demand is prohibited from selling lab tests to residents in the following states: NY, NJ, RI</b></p>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
