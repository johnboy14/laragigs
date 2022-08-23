@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
    @if (count($listings) == 0)
        <h1>
            No Listings found
        </h1>
    @endif

    @foreach($listings as $listing)
        <x-listing-card :listing="$listing"/>
    @endforeach
    @endsection
</div>