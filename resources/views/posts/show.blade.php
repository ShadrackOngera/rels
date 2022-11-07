
@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-indigo py-5 fw-bolder">{{ $post->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <h5>Location:&nbsp;<strong>{{ $post->location }}</strong></h5>
                <h5>Land Size:&nbsp;<strong>{{ $post->deed }}</strong></h5>
                <h5>Seller Name:&nbsp;<strong>{{ $post->user->name }}</strong></h5>
                <h5>Outright Price:&nbsp;<strong>{{ number_format($post->price) }}</strong></h5>
                <h5>Sold By {{ $post->type }}</h5>
                <h5><span class="text-capitalize">{{ $post->type }}</span> Contacts: <strong>{{ $post->contact }}</strong></h5>
                <h5>Title Deed: <strong>{{ $post->deed }}</strong></h5>
            </div>
            <div class="col-sm-6">
                @if($post->deed == 'no')
                    <div class="card">
                        <h5 class="fw-bold">Title Deed Image</h5>
                        <p class="text-danger">
                            This Post Has No Deed Image
                        </p>
                    </div>
                @else
                    <div class="card">
                        <h5 class="fw-bold">Title Deed Image</h5>
                        <img src="{{ asset('storage/'.$post->deed_img) }}" alt="Title-Deed" class="img-fluid">
                    </div>
                @endif
            </div>
        </div>

        <hr>
        <div class="mb-5" style="min-height: 400px">
            <h4 class="text-decoration-underline">Offer Description</h4>
            <p>
                {!! nl2br(e($post->description)) !!}
            </p>
        </div>

        <div>
            <div class="card">
                <div class="card-header text-center h3 fw-bold">Photo of the Land</div>
                <img src="{{ asset('storage/'.$post->land_img) }}" alt="Title-Deed" class="img-fluid">
            </div>
        </div>
        <div>
            @if(auth()->user()->id == $post->user_id)
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">
                                Reply Directly to Questions from Buyers
                            </h3>
                            <p class="text-muted text-center">This Chat can only be seen by you and the Buyer</p>
                        </div>

                        @foreach($post->chat as $chat)
                            <div class="mb-0">
                                @if($chat->user_id == $post->user_id)
                                    <span class="float-end fw-bold text-muted">
                                        {{ $chat->message }}
                                    </span>
                                @else
                                    <span class="">
                                        {{ $chat->message }}
                                    </span>
                                @endif
                            </div><br>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="card shadow mb-3">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center">
                                Have a Question? Directly ask the Seller Here
                            </h3>
                            <p class="text-muted text-center">This Chat can only be seen by you and the Seller</p>
                        </div>

                        @foreach($post->chat as $chat)
                            <div class="mb-0">
                                @if($chat->user_id == $post->user_id)
                                    <span class="float-end fw-bold text-muted">
                                        {{ $chat->message }}
                                    </span>
                                @else
                                    <span class="">
                                        {{ $chat->message }}
                                    </span>
                                @endif
                            </div><br>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>

        <form action="{{ route('chats.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Ask a Question" aria-label="Recipient's username" name="message" aria-describedby="button-addon2">
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <button class="btn btn-outline-secondary text-indigo" type="submit" id="button-addon2">Submit</button>
            </div>
        </form>

        <div class="d-grid gap-2 col-6 mx-auto mb-3">
            <a href="{{ route('home') }}" class="btn btn-info text-white">Back</a>
        </div>
        @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <div class="d-grid gap-2">
                        <a href="{{ route('posts.edit', $post->slug)  }}" class="btn btn-primary text-white">
                            Edit
                        </a>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-3">
                    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="d-grid gap-2">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </form>
                </div>
        @endif
    </div>
    <div></div>
@endsection
