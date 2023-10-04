@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row mx-auto">
        @php
            $i = 1;
        @endphp

        @if (count($data) == 0)
            <h1>we have no products for now</h1>
        @endif

    @foreach ($data as $key=> $value )

        @if ($i <= 3)
        @php
            $i == 1;
        @endphp
        @endif

    <div class="col-4 mt-4">

        <div class="card " style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('images/'.$i.'.jpg') }}" alt="Card image cap" style="height: 200px">
            <div class="card-body">
            <h5 class="card-title">{{ $value->name }}</h5>
            <p class="card-text">{{ $value->description }}</p>
            </div>
            <div class="d-flex gap-3 pb-2" style="display: flex; justify-content:center;">
                <a href="{{ route('products.show', $value->id) }}" class="btn btn-secondary">Show</a>
                <a href="{{ route('products.edit', $value->id) }}" class="btn btn-success">Edit</a>
                <a href="{{ route('products.destroy', $value->id) }}" class="btn btn-danger ">delete</a>
            </div>        
        </div>
    </div>
    @php
            $i++
    @endphp
    @endforeach
</div>
</div>

@endsection 
