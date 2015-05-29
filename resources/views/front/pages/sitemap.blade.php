@extends('front.base')

@section('seo')
    @include('front.partials.seotags', [
    'description' => 'Isomark Site Map - easily find what you are looking for on the site',
    'keywords' => 'Isomark, SHEQ training, Risk Management Training',
    'title' => 'Isomark Site Map'])
    @include('front.partials.ogmeta', [
    'og_title' => 'Isomark Site Map',
    'og_description' => 'Isomark Site Map - easily find what you are looking for on the site',
    'og_url' => Request::url()])
@endsection

@section('content')
    @include('front.partials.pageheader', ['pageTitle' => 'Isomark Site Map'])
    <div class="container sitemap-page">
        @include('front.partials.sitemap')
    </div>
    @include('front.partials.footer')
@endsection

