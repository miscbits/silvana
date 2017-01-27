@extends('quarx-frontend::layout.master')

@section('seoDescription') {{ $page->seo_description }} @endsection
@section('seoKeywords') {{ $page->seo_keywords }} @endsection

@section('content')
@if($page->featured_image)
    <header style="background-image:url({{ $page->featured_image }});min-height:50vh;">
    	<div class="header-content">
	    	<h1>{!! $page->title !!}</h1>
		</div>
    </header>

@endif

<div class="container inner-page">

    {!! $page->entry !!}

</div>

@endsection

@section('quarx')
    @edit('pages', $page->id)
@endsection
