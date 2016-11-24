@extends('quarx::layouts.dashboard')

@section('content')

    <div class="row">
        <h1 class="page-header">Products</h1>
    </div>

    @include('products::products.breadcrumbs', ['location' => ['create']])

     <div class="row">
        {!! Form::open(['route' => 'quarx.products.store', 'products' => true, 'id' => 'fileDetailsForm', 'class' => 'add']); !!}

            {!! FormMaker::fromTable('products', Quarx::moduleConfig('products', 'products')) !!}

            <div class="form-group text-right">
                <a href="{!! URL::to('quarx/products') !!}" class="btn btn-default raw-left">Cancel</a>
                {!! Form::submit('Save', ['class' => 'btn btn-primary', 'id' => 'saveFilesBtn']) !!}
            </div>

        {!! Form::close() !!}
    </div>

@endsection
