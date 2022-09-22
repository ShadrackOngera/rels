@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            @if(Auth::check())
                @if(auth()->user()->type == 'seller')
                    <div>
                        <div class="container mb-3 align-self-center">
                            <div class="position-relative py-5">
                                <div class="-absolute top-50 start-50 translate-middle col-sm-4">
                                    <a href="{{ route('posts.create') }}" class="btn btn-info text-white w-100">
                                        New Offer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Post Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Price</th>
                    @can('publish post')
                        <th scope="col">View Offer</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Publish</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->location }}</td>
                            <td>{{ $post->user->name }}</td>
                            <td>{{ number_format($post->price) }}</td>
                            @can('publish post')
                                <td>
                                    <a href="{{ route('posts.show', $post->slug)  }}" class="btn btn-outline-primary">
                                        View
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('posts.edit', $post->slug)  }}" class="btn btn-outline-primary">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('publish.store') }}" method="POST" enctype="" class="mb-3">
                                        @csrf
                                        <input type="number" class="form-control" id="floatingInput" name="post_id" hidden value="{{ $post->id }}">
                                        <input type="text" class="form-control" id="floatingInput" name="user_name" hidden value="{{ $post->user->name }}">
                                        <input type="text" class="form-control" id="floatingInput" name="title" hidden value="{{ $post->title }}">
                                        <input type="text" class="form-control" id="floatingInput" name="slug" hidden value="{{ $post->slug }}">
                                        <input type="text" class="form-control" id="floatingInput" name="location" hidden value="{{ $post->location }}">
                                        <input type="text" class="form-control" id="floatingInput" name="size"  hidden value="{{ $post->size }}">
                                        <input type="number" class="form-control" id="floatingInput" name="price" hidden value="{{ $post->price }}">
                                        <input type="text" class="form-control" id="floatingInput" name="type"  hidden value="{{ $post->type }}">
                                        <input type="text" class="form-control" id="floatingInput" name="deed" placeholder="Title Deed Image" hidden value="{{ $post->deed }}">
                                        <textarea class="form-control" placeholder="Description" name="description" id="floatingTextarea2" style="height: 200px" hidden value="{{ $post->description }}"></textarea>

                                        <button type="submit" class="btn btn-success text-white">
                                            Publish
                                        </button>
                                    </form>
                                    </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
{{--    <div>--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach($posts as $post)--}}
{{--                    <div class="col-sm-6 mb-4">--}}
{{--                        <div class="card shadow h-100">--}}
{{--                            <div class="card-body d-flex flex-column justify-content-between">--}}
{{--                                <div class="row mb-3">--}}
{{--                                    <div class="col-sm-6 mb-3">--}}
{{--                                        <h2 class="mb-3 text-capitalize">{{ $post->title }}</h2>--}}
{{--                                        <h4 class="">Location: {{ $post->location }}</h4>--}}
{{--                                        <h5 class="">Size: {{ $post->size }}</h5>--}}
{{--                                        <h6 class="text-capitalize">Posted by {{ $post->user->name }}</h6>--}}
{{--                                        <h6>Ksh. {{ number_format($post->price) }}</h6>--}}
{{--                                        <small>Published on <span class="fw-bold">{{ date('jS M Y', strtotime($post->updated_at)) }}</span></small><br>--}}
{{--                                        <div>--}}
{{--                                            <span>Title deed: </span>--}}
{{--                                            @if($post->deed == 1)--}}
{{--                                                <span>Yes</span>--}}
{{--                                            @else--}}
{{--                                                <span>No</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <span>Sold By </span>--}}
{{--                                            @if($post->type == 1)--}}
{{--                                                <span>the owner</span>--}}
{{--                                            @else--}}
{{--                                                <span>a Broker</span>--}}
{{--                                            @endif--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6 banner-land position-relative rounded-3">--}}
{{--                                        <div class="py-5">--}}
{{--                                            <div class="position-absolute top-50 start-50 translate-middle">--}}
{{--                                                <h4 class="text-capitalize">{{ $post->title }}</h4>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div>--}}
{{--                                    <a href="{{ route('posts.show', $post->slug)  }}" class="btn btn-info w-100 text-white mb-3">View Offer</a>--}}
{{--                                    @if(isset(Auth::user()->id) && Auth::user()->id == $post->user_id)--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-sm-6 mb-3">--}}
{{--                                                <div class="d-grid gap-2">--}}
{{--                                                    <a href="{{ route('posts.edit', $post->slug)  }}" class="btn btn-primary text-white">--}}
{{--                                                        Edit--}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            --}}{{--                                            <div class="col-sm-4 mb-3">--}}
{{--                                            --}}{{--                                                <div class="d-grid gap-2 text-center">--}}
{{--                                            --}}{{--                                                    <a href="#" class="btn btn-primary text-white position-relative">--}}
{{--                                            --}}{{--                                                        New Messages--}}
{{--                                            --}}{{--                                                        <span class=" badge rounded-2 ms-3 py-2 bg-success fw-bold">--}}
{{--                                            --}}{{--                                                            0--}}
{{--                                            --}}{{--                                                            <span class="visually-hidden">unread messages</span>--}}
{{--                                            --}}{{--                                                          </span>--}}
{{--                                            --}}{{--                                                    </a>--}}
{{--                                            --}}{{--                                                </div>--}}
{{--                                            --}}{{--                                            </div>--}}
{{--                                            <div class="col-sm-6">--}}
{{--                                                <form action="{{route('posts.destroy',$post->id)}}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <div class="d-grid gap-2">--}}
{{--                                                        <button class="btn btn-danger">--}}
{{--                                                            Delete--}}
{{--                                                        </button>--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $posts->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection
