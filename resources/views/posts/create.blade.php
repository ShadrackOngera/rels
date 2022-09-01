@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="text-center text-uppercase">
                <h1>Create Post</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('store.post') }}" method="POST" class="mb-3">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title">
                <label for="floatingInput">Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="location" placeholder="Location">
                <label for="floatingInput">Location</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="size" placeholder="size">
                <label for="floatingInput">Land Size</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="price" placeholder="Outright Price">
                <label for="floatingInput">Outright Price</label>
            </div>
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Description</label>
            </div>
            <div class="d-grid gap-2 mb-3">
                <button type="submit" class="btn btn-success text-white">
                    Submit
                </button>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ route('home') }}" class="btn btn-primary text-white w-100">Cancel</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('home') }}" class="btn btn-info text-white w-100">Home Page</a>
                </div>
            </div>
        </form>
    </div>
    <div class="py-5"></div>
@endsection
