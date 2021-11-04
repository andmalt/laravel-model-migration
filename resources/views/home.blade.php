@extends('layouts.main')

@section('title', 'Home')


@section('contain')
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            @foreach ($travelPackages as $package)
            <div class="col-12 col-md-7 col-lg-3 card p-4 m-2">
                <h3>{{ $package['name'] }}</h3>
                <h5>located in {{ $package['locality'] }}</h5>
                <p>date from {{ $package['date_from'] }} to {{ $package['date_to'] }}</p>
                <p>guests {{ $package['guests'] }}</p>
                <p>rooms {{ $package['rooms'] }}</p>
                <p>Amenities: {{ $package['amenities'] }}</p>
                <p>rating {{ $package['rating'] }} to 5</p>
                <p>{{ $package['description'] }}</p>
                <p>Price {{ $package['price'] }} &dollar;</p>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection