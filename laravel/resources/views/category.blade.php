@extends('layouts.front')

@section('title','Categories')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Arthritis & Inflammation Tests</h1>
        <div class="lista">
            <?php for($l=1; $l<=8; $l++){ ?>
            <article>
                <div class="info">
                    <h2>Benzodiozepine Screen, Blood</h2>
                    <p>Price: $499</p>
                </div>
                <div class="acciones">
                    <a href="{{ route('test') }}" class="vermas">View details</a>
                    <a href="" class="agregar">Add to Cart</a>
                </div>
            </article>
        <?php } ?>
        </div>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
