@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="align-items-center">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    {!! \Session::get('message') !!}
                </div>
            @endif
        </div>
    </div>
    @can('create post')
        <div>
            <div class="container">
                <div class="text-center text-uppercase">
                    <h1>Create House Offer Offer</h1>
                </div>
            </div>
        </div>
        <div class="text-center">
            <h1>For your post to be published, You have to pay to the Mpesa till below <span class="fw-bold">(5870505)</span></h1>
            <img src="{{ asset('images/pics/till.jpg') }}" alt="5870505" class="img-fluid">
        </div>
        <div class="container">
            <form action="{{ route('rentals.store') }}" method="POST" enctype="multipart/form-data" class="mb-3">
                @csrf
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title" required>
                    <label for="floatingInput">Title</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="location" placeholder="Location" required>
                    <label for="floatingInput">Where is the House Located</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="house_type" placeholder="House Type" required>
                    <label for="floatingInput">House Type</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="price" placeholder="Outright Price" required>
                    <label for="floatingInput">Outright Price</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="time" placeholder="time" required>
                    <label for="floatingInput">Time</label>
                </div>

                <label for="floatingInput" class="text-muted">RelationShip</label>
                <select class="form-select mb-3 py-3" aria-label="Default select example" name="relationship" required>
                    <option value="Owner">I'm The Owner</option>
                    <option value="Broker">I'm A Broker</option>
                </select>

                <div class="mb-3">
                    <label for="floatingInput" class="text-muted">House Image</label>
                    <input type="file" class="form-control" id="floatingInput" name="house_image" placeholder="House Image">
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
