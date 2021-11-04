@extends('layouts.main')

@section('title', 'Home')


@section('contain')
    <div class="container-fluid">
        <div class="row">
            @foreach ($travelPackages as $package)
            <div class="col-12 col-md-8 col-lg-4">
                <h3>{{ $package['name'] }}</h3>
            </div>
            @endforeach
            
        </div>
    </div>
@endsection