@extends('layouts.app')
@section('content')
    <div class="banner-contact mb-5">
        <div class="py-4"></div>
        <div class="container">
            <div class="align-self-center text-center text-dark">
                <h1>Contact us</h1>
                <p>
                    Do you Have a Message or would like to speak to us Directly?
                </p>
                <p>
                    Feel free to leave us your message
                </p>
            </div>
        </div>
        <div class="py-5"></div>
    </div>
    <div class="py-4"></div>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 h-100">
                    <img src="{{ asset('images/pics/sky-land.jpg') }}" alt="..." class="img-fluid rounded-3">
                </div>
                <div class="col-sm-6">
                    <h2>Get In Touch</h2>
                    <form action="{{ route('store.contact') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="Name">
                            <label for="floatingInput">Name</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a Message here" name="message" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary text-white" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="py-5"></div>

@endsection
