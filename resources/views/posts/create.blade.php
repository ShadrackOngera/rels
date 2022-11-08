@extends('layouts.app')
@section('content')
    @can('create post')
        <div>
            <div class="container">
                <div class="text-center text-uppercase">
                    <h1>Create Land Offer</h1>
                </div>
            </div>
        </div>
        <div class="text-center mb-3">
            <h1>For your post to be published, You have to pay to the Mpesa till below <span class="fw-bold">(5870505)</span></h1>
            <img src="{{ asset('images/pics/till.jpg') }}" alt="5870505" class="img-fluid">
        </div>
        <div class="container">
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="mb-3">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title" required>
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="location" placeholder="Location" required>
                    <label for="floatingInput">Location</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="size" placeholder="size" required>
                    <label for="floatingInput">Land Size</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="price" placeholder="Outright Price" required>
                    <label for="floatingInput">Outright Price</label>
                </div>

                <label for="floatingInput" class="text-muted">RelationShip</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="type" required>
                    <option value="owner">I'm The Owner</option>
                    <option value="broker">I'm A Broker</option>
                </select>

                <select class="form-select mb-3 py-3" aria-label="Default select example" name="deed" required>
                    <option selected>Do you have a title deed for this land?</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                </select>

                <div class="mb-3">
                    <label for="floatingInput" class="text-muted">Title Deed Image</label>
                    <input type="file" class="form-control" id="floatingInput" name="deed_img" placeholder="Title Deed Image" >
                </div>

                <div class="mb-3">
                    <label for="floatingInput" class="text-muted">Land Photo</label>
                    <input type="file" class="form-control" id="floatingInput" name="land_img" placeholder="Land Photo">
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 200px" required></textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="contact" placeholder="Contact" required>
                    <label for="floatingInput">Contact</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="code" placeholder="Payment Code" required>
                    <label for="floatingInput">Your Payment Code</label>
                    <small class="form-text">The Expected Payment Code is from M-pesa</small>
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
