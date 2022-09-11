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
        <h5>Location:&nbsp;<strong>{{ $post->location }}</strong></h5>
        <h5>Land Size:&nbsp;<strong>{{ $post->size }}</strong></h5>
        <h5>Seller Name:&nbsp;<strong>{{ $post->user->name }}</strong></h5>
        <h5>Outright Price:&nbsp;<strong>{{ $post->price }}</strong></h5>
        <div class="h5">
            <span>Title deed: </span>
            @if($post->deed == 1)
                <span>Yes</span>
            @else
                <span>No</span>
            @endif
        </div>
        <div class="h5">
            <span>Sold By </span>
            @if($post->type == 1)
                <span>the owner</span>
            @else
                <span>a Broker</span>
            @endif
        </div>

        <hr>
        <div class="mb-5">
            <h4 class="text-decoration-underline">Offer Description</h4>
            <p>
                {!! nl2br(e($post->description)) !!}
            </p>
        </div>
        <div>
            <div class="card shadow mb-3">
                <div class="card-body">
{{--                    {{ $post->chat }}--}}
                    <h3 class="text-center text-decoration-underline">
                        Comments
                    </h3>
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
