@extends('layouts.app')

@section('content')
    <div class="card mb-3" >
        <img class="" src="{{ asset('images/1.jpg') }}" alt="Card image cap">
        <div class="card-body">
        <h5 class="card-title">{{ $data->name }}</h5>
        <p class="card-text">{{ $data->description }}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Products</a>
    </div>
@endsection