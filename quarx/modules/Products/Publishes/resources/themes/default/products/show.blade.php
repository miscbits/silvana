@extends('quarx-frontend::layout.master')

@section('content')

<div class="container">

    <h1>{!! $product->id !!} - <span>{!! $product->updated_at !!}</span></h1>

</div>

@endsection

@section('quarx')
    @edit('products', $product->id)
@endsection
