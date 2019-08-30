@extends('layouts.front')

@section('title','Home')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Arthritis & Inflammation Test</h1>
        <div class="det_test">
            <ul>
                <li>Ensamiento popular, <b>el texto de Lorem Ipsum</b> no es simplemente texto</li>
                <li>De Latin de la Universidad de Hampden-Sydney en Virginia, encontró un</li>
                <li>Tiene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malo</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit</li>
                <li>Maecenas consequat turpis id luctus accumsan. Quisque sit amet feugiat sapien. Vestibulum ante ipsum primis in faucibus </li>
            </ul>
        </div>
        <div class="det_test2">
            <p>Lorem ipsum dolor sit amet, consectetur <b>adipiscing elit</b>. Sed hendrerit nec purus id pretium. Sed a ante quis sapien dignissim porttitor vitae eget neque. </p>
            <p>Aliquam ultrices libero sed felis placerat, nec laoreet turpis aliquam. Donec mollis metus lectus, vitae porttitor nisi ullamcorper non. Etiam placerat rutrum metus, eu sollicitudin orci viverra id. Donec sit amet varius sapien, et dignissim lorem. Vestibulum nec nisi ligula.</p>
            <p>
                <ul>
                    <li>Donec vulputate purus at leo hendrerit venenatis.</li>
                    <li>Vivamus mollis, metus ut convallis interdum.</li>
                    <li>Vestibulum accumsan condimentum nunc</li>
                </ul>
            </p>
            <p>Sed vitae convallis sem, id dictum mi. Fusce sagittis, est ut lobortis condimentum, magna sapien pharetra libero.</p>
            <div class="det_precio">
                <b>Price:&nbsp;</b>$455
                <a href="" class="agregar">Add to Cart</a>
            </div>
        </div>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
