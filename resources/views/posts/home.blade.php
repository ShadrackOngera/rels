@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            @if(Auth::check())
                <div>
                    <div class="container mb-3 align-self-center">
                        <div class="position-relative py-5">
                            <div class="position-absolute top-50 start-50 translate-middle col-sm-4">
                                <a href="{{ route('create.post') }}" class="btn btn-info text-white w-100">
                                    New Offer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-sm-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <h2 class="mb-3">{{ $post->title }}</h2>
                                        <h4 class="">Location: {{ $post->location }}</h4>
                                        <h5 class="">Size: {{ $post->size }}</h5>
                                        <h6>Posted By {{ $post->user->name }}</h6>
                                        <h6>Ksh. {{ $post->price }}</h6>
                                        <small>Published on <span class="fw-bold">{{ date('jS M Y', strtotime($post->updated_at)) }}</span></small><br>
                                        <div>
                                            <span>Title deed: </span>
                                            @if($post->deed == 1)
                                                <span>Yes</span>
                                            @else
                                                <span>No</span>
                                            @endif
                                        </div>
                                        <div>
                                            <span>Sold By </span>
                                            @if($post->type == 1)
                                                <span>the owner</span>
                                            @else
                                                <span>a Broker</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="{{ asset('images/pics/meru-land.jpg') }}" alt="Girl in a jacket" class="rounded-3 img-fluid">
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('posts.show', $post->slug)  }}" class="btn btn-info w-100 text-white mb-3">View Offer</a>
                                    @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                        <div class="row">
                                            <div class="col-sm-4 mb-3">
                                                <div class="d-grid gap-2">
                                                    <a href="{{ route('posts.edit', $post->slug)  }}" class="btn btn-primary text-white">
                                                        Edit
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3">
                                                <div class="d-grid gap-2 text-center">
                                                    <a href="#" class="btn btn-primary text-white position-relative">
                                                        New Messages
                                                        <span class=" badge rounded-2 ms-3 py-2 bg-success fw-bold">
                                                            0
                                                            <span class="visually-hidden">unread messages</span>
                                                          </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
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
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>
    </div>
@endsection
