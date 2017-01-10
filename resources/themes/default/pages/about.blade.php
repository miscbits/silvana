@extends('quarx-frontend::layout.master')

@if (isset($page))
	@section('seoDescription') {{ $page->seo_description }} @endsection
	@section('seoKeywords') {{ $page->seo_keywords }} @endsection
@endif

@section('content')

<div class="container">

    <div class="jumbotron">
        <h1>About The Poetry Store</h1>
	@if (isset($page))
        <h2>{{ $page->title }}</h2>
    @endif
    </div>

</div>

@endsection