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
                                <a href="/admin/create" class="btn btn-info text-white w-100">
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
                    <th scope="col">House Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Location</th>
                    <th scope="col">House Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Time</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Relationship</th>
                    @can('publish post')
                        <th scope="col">View Offer</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Publish</th>
                    @endcan
                </tr>
                </thead>
                <tbody>
                @foreach($rentals as $rental)
                    <tr>
                        <th scope="row">{{ $rental->id }}</th>
                        <td>{{ $rental->title }}</td>
                        <td>{{ $rental->location }}</td>
                        <td>{{ $rental->house_type }}</td>
                        <td>{{ number_format($rental->price) }}</td>
                        <td>{{ $rental->time }}</td>
                        <td>{{ $rental->user->name }}</td>
                        <td>{{ $rental->relationship }}</td>
                        @can('publish post')
                            <td>
                                <a href="{{ route('posts.show', $rental->slug)  }}" class="btn btn-outline-primary">
                                    View
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('posts.edit', $rental->slug)  }}" class="btn btn-outline-primary">
                                    Edit
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('publish.store') }}" method="POST" enctype="" class="mb-3">
                                    @csrf
                                    <input type="hidden" name="post_id" hidden value="{{ $rental->id }}">
{{--                                    <input type="hidden" name="user_name" hidden value="{{ $rental->user->name }}">--}}
                                    <input type="hidden" name="title" hidden value="{{ $rental->title }}">
                                    <input type="hidden" name="slug" hidden value="{{ $rental->slug }}">
                                    <input type="hidden" name="location" hidden value="{{ $rental->location }}">
                                    <input type="hidden" name="house_type"  hidden value="{{ $rental->house_type }}">
                                    <input type="hidden" name="price" hidden value="{{ $rental->price }}">
                                    <input type="hidden" name="time"  hidden value="{{ $rental->time }}">
                                    <input type="hidden" name="relationship" hidden value="{{ $rental->relationship }}">
                                    <input type="hidden" name="house_image" hidden value="{{ $rental->house_image }}">
                                    <textarea name="description" type="hidden" hidden value="{{ $rental->description }}"></textarea>
                                    <input type="hidden" name="contact" hidden value="{{ $rental->contact }}">

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

    <div class="container">
        <div class="d-flex justify-content-center">
            {!! $rentals->links("pagination::bootstrap-4") !!}
        </div>
    </div>
@endsection