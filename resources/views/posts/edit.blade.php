@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="container">
                <form action="{{route('posts.update', $post->slug)}}" method="POST" class="mb-3">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" value="{{ $post->title }}">
                        <label for="floatingInput">Title</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="location" value="{{ $post->location }}">
                        <label for="floatingInput">Location</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="size" value="{{ $post->size }}">
                        <label for="floatingInput">Land Size</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" name="price" value="{{ $post->price }}">
                        <label for="floatingInput">Outright Price</label>
                    </div>
                    <select class="form-select mb-3 py-3" aria-label="Default select example" name="deed" value="{{ $post->deed }}">
                        <option selected>Do you have a title deed for this land?</option>
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                    </select>
                    <select class="form-select mb-3 py-3" aria-label="Default select example" name="type">
                        <option selected>I'm a ...</option>
                        <option value="1">Seller</option>
                        <option value="2">Broker</option>
                    </select>
                    <div class="form-floating mb-5">
                        <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 250px">{{ $post->description }}</textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn btn-success text-white">
                            Submit
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="{{ route('posts.show', $post->slug)  }}" class="btn btn-primary text-white w-100">Back</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="/" class="btn btn-info text-white w-100">Home Page</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
