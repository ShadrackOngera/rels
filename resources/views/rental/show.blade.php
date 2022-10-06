@extends('layouts.app')
@section('content')
    <div class="banner-show">
        <div class="container">
            <div class="text-center text-uppercase align-self-center">
                <h2 class="text-indigo py-5 fw-bolder">{{ $rental->title }}</h2>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 align-self-center">
                <h5>Location:&nbsp;<strong>{{ $rental->location }}</strong></h5>
                <h5>Land Size:&nbsp;<strong>{{ $rental->deed }}</strong></h5>
                <h5>Seller Name:&nbsp;<strong>{{ $rental->user->name }}</strong></h5>
                <h5>Outright Price:&nbsp;<strong>{{ number_format($rental->price) }}</strong></h5>
                <h5>Sold By {{ $rental->type }}</h5>
                <h5><span class="text-capitalize">{{ $rental->type }}</span> Contacts: <strong>{{ $rental->contact }}</strong></h5>
                <h5>Title Deed: <strong>{{ $rental->deed }}</strong></h5>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="fw-bold">Title Deed Image</h5>
                    <img src="{{ asset('storage/'.$rental->house_image) }}" alt="Title-Deed" class="img-fluid">
                </div>
            </div>
        </div>

        <hr>
        <div class="mb-5" style="min-height: 400px">
            <h4 class="text-decoration-underline">Offer Description</h4>
            <p>
                {!! nl2br(e($rental->description)) !!}
            </p>
        </div>

        <div>
            <div class="card">
                <div class="card-header text-center h3 fw-bold">Photo of the Land</div>
                <img src="{{ asset('storage/'.$rental->house_image) }}" alt="Title-Deed" class="img-fluid">
            </div>
        </div>
{{--        <div>--}}
{{--            <div class="card shadow mb-3">--}}
{{--                <div class="card-body">--}}
{{--                    --}}{{--                    {{ $post->chat }}--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="text-center">--}}
{{--                            Have a Question? Directly ask the Seller Here--}}
{{--                        </h3>--}}
{{--                        <p class="text-muted text-center">This Chat can only be seen by you and the Seller</p>--}}
{{--                    </div>--}}

{{--                    @foreach($post->chat as $chat)--}}
{{--                        --}}{{--                        @if(($post->user->id) && (auth()->user()->id  === $post->chat->user_id))--}}
{{--                        <div class="mb-0">--}}
{{--                            @if($chat->user_id == $post->user_id)--}}
{{--                                <span class="float-end fw-bold text-muted">--}}
{{--                                        {{ $chat->message }}--}}
{{--                                    </span>--}}
{{--                            @else--}}
{{--                                <span class="">--}}
{{--                                        {{ $chat->message }}--}}
{{--                                    </span>--}}
{{--                            @endif--}}
{{--                        </div><br>--}}
{{--                        --}}{{--                        @endif--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <form action="{{ route('chats.store') }}" method="POST">--}}
{{--            @csrf--}}
{{--            <div class="input-group mb-3">--}}
{{--                <input type="text" class="form-control" placeholder="Ask a Question" aria-label="Recipient's username" name="message" aria-describedby="button-addon2">--}}
{{--                <input type="hidden" name="post_id" value="{{ $post->id }}">--}}
{{--                <button class="btn btn-outline-secondary text-indigo" type="submit" id="button-addon2">Submit</button>--}}
{{--            </div>--}}
{{--        </form>--}}

        <div class="d-grid gap-2 col-6 mx-auto mb-3">
            <a href="{{ route('home') }}" class="btn btn-info text-white">Back</a>
        </div>
        @if(isset(Auth::user()->id) && Auth::user()->id == $rental->user_id)
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <div class="d-grid gap-2">
                    <a href="{{ route('posts.edit', $rental->slug)  }}" class="btn btn-primary text-white">
                        Edit
                    </a>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-3">
                <form action="{{route('posts.destroy',$rental->id)}}" method="POST">
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
