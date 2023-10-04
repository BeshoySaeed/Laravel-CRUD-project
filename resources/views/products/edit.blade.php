@extends('layouts.app')

@section('content')

<div class="container">

    <form method="POST" action="{{ route('products.update') }}">


        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" name="name" value="{{ $data->name }}">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">email</label>
        <input type="email" class="form-control" name="email" value="{{ $data->email }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">description</label>
            <input type="text" class="form-control" name="description" value="{{ $data->description }}">
            </div>
        <div class="form-group">
            <label class="form-check-label" >image</label>
            <input type="text"class="form-control" name="img" value="{{ $data->img }}" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection
