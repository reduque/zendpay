@extends('layouts.front')

@section('title','Home')

@section('css')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endsection


@section('content')
<div class="slick">
    <img src="uploads/banners/b1.jpg" alt="">
    <img src="uploads/banners/b2.jpg" alt="">
    <img src="uploads/banners/b3.jpg" alt="">
</div>
<section class="pasos">
    <div class="item">
        <img src="img/paso1.jpg" class="paso_img">
        <div class="info">
            <img src="img/1.svg">
            Select<br>and order your test
        </div>
        <p>Choose online from our broad list of tests or call our office. Proceed to checkout, you’ll be asked to register or login and a lab order will be immediately generated.</p>      
    </div>
    <div class="item">
        <img src="img/paso2.jpg" class="paso_img">
        <div class="info">
            <img src="img/2.svg">
            Choose<br>and visit a local lab
        </div>
        <p>After selecting the appropriate tests, choose a lab location near you from our map locator to have your blood or specimens collected (You may want to make an appointment),  please check the test ordered to see if you need any preparation and remember to bring a printed LTOD order with you to the lab.</p>
    </div>
    <div class="item">
        <img src="img/paso3.jpg" class="paso_img">
        <div class="info">
            <img src="img/3.svg">
            Get your<br>confidential results
        </div>
        <p>Login to our secure server to access the results of your tests, once available you’ll be able to display, save, print and share with your doctor if desired. Many results will be available within 1-3 days, but it could take longer.</p>
    </div>

    
</section>
<section class="popular">
    <h2>MOST POPULAR TESTS</h2>
    <ul>
        <li>
            <a href="">
                <p>Vitamin D, 25 Hydroxy</p>
            </a>
        </li>
        <li>
            <a href="">
                <p>Women´s Health Check</p>
            </a>
        </li>
        <li>
            <a href="">
                <p>Men´s Health Check</p>
            </a>
        </li>
        <li>
            <a href="">
                <p>Magneslum, RBC</p>
            </a>
        </li>
    </ul>
</section>
<!--
    <img src="img/borrar/4.jpg" alt="">
-->
    <img src="img/borrar/5.jpg" alt="">

@endsection

@section('javascript')


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function(){
        $('.slick').slick({
            arrows: false,
            autoplay: true
        });
    });
</script>


@endsection
