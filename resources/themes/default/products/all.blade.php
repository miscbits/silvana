@extends('quarx-frontend::layout.master')

@section('content')

<div class="container">

    <h1>Product</h1>

    <div class="row">
        <div class="col-md-12">
            @foreach($products as $product)
                <a href="{!! URL::to('products/'.$product->id) !!}"><p>{!! $product->name !!} - <span>{!! $product->updated_at !!}</span></p></a>
            @endforeach

            {!! $products !!}
        </div>
    </div>

</div>

@endsection

@section('quarx')
    @edit('products')
@endsection