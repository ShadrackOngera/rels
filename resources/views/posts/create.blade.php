@extends('layouts.app')
@section('content')
    @can('create post')
        <div>
            <div class="container">
                <div class="text-center text-uppercase">
                    <h1>Create Offer</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mb-3">
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
                    <input type="number" class="form-control" id="floatingInput" name="price" placeholder="Outright Price">
                    <label for="floatingInput">Outright Price</label>
                </div>

                <select class="form-select mb-3 py-3" aria-label="Default select example" name="type" >
{{--                    <option selected>I'm ...</option>--}}
                    <option value="owner">I'm The Owner</option>
                    <option value="broker">I'm A Broker</option>
                </select>

                <div class="mb-3">
                    <label for="floatingInput" class="text-muted">Title Deed Image</label>
                    <input type="file" class="form-control" id="floatingInput" name="deed" placeholder="Title Deed Image">
                </div>
{{--                <select class="form-select mb-3 py-3" aria-label="Default select example" name="deed">--}}
{{--                    <option selected>Do you have a title deed for this land?</option>--}}
{{--                    <option value="1">Yes</option>--}}
{{--                    <option value="2">No</option>--}}
{{--                </select>--}}

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
    @endcan
@endsection
