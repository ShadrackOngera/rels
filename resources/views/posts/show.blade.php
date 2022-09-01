@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-white py-5">{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <h5>Location:&nbsp;<strong>{{ $post->location }}</strong></h5>
        <h5>Land Size:&nbsp;<strong>{{ $post->size }}</strong></h5>
        <h5>Seller Name:&nbsp;<strong>{{ $post->user->name }}</strong></h5>
        <h5>Outright Price:&nbsp;<strong>{{ $post->price }}</strong></h5>
        <hr>
        <div class="mb-5">
            <h4 class="text-decoration-underline">Offer Description</h4>
            <p>
                {!! nl2br(e($post->description)) !!}
            </p>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
            <a href="{{ route('home') }}" class="btn btn-info text-white">Back</a>
        </div>
    </div>
    <div></div>
@endsection
