@extends('quarx::layouts.dashboard')

@section('content')

    <div class="row">
        <a class="btn btn-primary pull-right" href="{!! route('quarx.products.create') !!}">Add New</a>
        <a class="btn btn-warning pull-right raw-margin-right-8" href="{!! URL::to('quarx/rollback/product/'.$product->id) !!}">Rollback</a>
        <h1 class="page-header">Products</h1>
    </div>

    @include('products::products.breadcrumbs', ['location' => ['edit']])

    <div class="row">
        {!! Form::model($product, ['route' => ['quarx.products.update', $product->id], 'method' => 'patch', 'class' => 'edit']) !!}

            {!! FormMaker::fromObject($product, FormMaker::getTableColumns('products')) !!}

            <div class="form-group text-right">
                <a href="{!! URL::to('quarx/products') !!}" class="btn btn-default raw-left">Cancel</a>
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection


