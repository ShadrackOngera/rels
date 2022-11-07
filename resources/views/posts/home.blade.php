@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            @can('create post')
                <div>
                    <div class="py-3"></div>
                    <div class="container mb-3 align-self-center">
                        <div class="position-relative">
                            <div class="position-absolute top-50 start-50 translate-middle col-sm-4">
                                <a href="{{ route('post.create') }}" class="btn btn-info text-white w-100">
                                    New Offer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="py-3"></div>
                </div>
            @endcan
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
                    <th scope="col">Contact</th>
                    <th scope="col">Payment Code</th>
                    @can('publish post')
                        <th scope="col">View Offer</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Publish</th>
                        <th scope="col">Delete</th>
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
                            <td>{{ $post->contact }}</td>
                            <td>{{ $post->code }}</td>
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
                                    @if($post->publish()->exists())
                                        <form action="{{route('publish.destroy',$post->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-danger text-white">
                                                    UnPublish
                                                </button>
                                            </div>
                                        </form>
                                    @else
                                    <form action="{{ route('publish.store') }}" method="POST" enctype="" class="mb-3">
                                        @csrf
                                        <input type="hidden" name="post_id" hidden value="{{ $post->id }}">
                                        <input type="hidden" name="user_name" hidden value="{{ $post->user->name }}">
                                        <input type="hidden" name="title" hidden value="{{ $post->title }}">
                                        <input type="hidden" name="slug" hidden value="{{ $post->slug }}">
                                        <input type="hidden" name="location" hidden value="{{ $post->location }}">
                                        <input type="hidden" name="size"  hidden value="{{ $post->size }}">
                                        <input type="hidden" name="price" hidden value="{{ $post->price }}">
                                        <input type="hidden" name="type"  hidden value="{{ $post->type }}">
                                        <input type="hidden" name="deed" hidden value="{{ $post->deed }}">
                                        <input type="hidden" name="deed_img" hidden value="{{ $post->deed_img }}">
                                        <input type="hidden" name="land_img" hidden value="{{ $post->land_img }}">
                                        <input type="hidden" name="contact" hidden value="{{ $post->contact }}">
                                        <textarea name="description" type="hidden" hidden value="{{ $post->description }}"></textarea>

                                        <button type="submit" class="btn btn-success text-white">
                                            Publish
                                        </button>
                                    </form>
                                    @endif
                                    </td>
                                <td>
                                    <form action="{{route('posts.destroy',$post->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-danger text-white">
                                                Delete
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            @endcan
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $posts->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection
