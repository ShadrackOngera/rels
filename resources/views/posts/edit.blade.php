@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="container">
                <form action="/blog/{{ $post->slug }}" method="POST" class="mb-3">
                    @csrf
                    @method('PUT')
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="title" value="{{ $post->title }}">
                        <label for="floatingInput">Title</label>
                    </div>
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
                            <a href="/blog" class="btn btn-primary text-white w-100">Back</a>
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
