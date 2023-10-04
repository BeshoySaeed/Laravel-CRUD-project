@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-group">
            <label class="form-check-label" >image</label>
            <input type="text"class="form-control" name="img" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
