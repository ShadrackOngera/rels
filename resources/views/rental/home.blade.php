@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            @can('create post')
                <div>
                    <div class="py-3"></div>
                    <div class="container mb-3 align-self-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ route('rentals.create') }}" class="btn btn-info text-white w-100">
                                    New Housing Offer
                                </a>
                            </div>
                            <div class="col-sm-6">
                                <a href="{{ route('post.create') }}" class="btn btn-info text-white w-100">
                                    New Land Offer
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
                    <th scope="col">Payment Code</th>
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
                        <td>{{ $rental->code }}</td>
                        @can('publish post')
                            <td>
                                <a href="{{ route('rentals.show', $rental->slug)  }}" class="btn btn-outline-primary">
                                    View
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('rentals.edit', $rental->slug)  }}" class="btn btn-outline-primary">
                                    Edit
                                </a>
                            </td>
                            <td>
                                    @if($rental->housePublish()->exists())
                                            <form action="{{route('housePublish.destroy',$rental->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <div class="d-grid gap-2">
                                                    <button type="submit" class="btn btn-danger text-white">
                                                        UnPublish
                                                    </button>
                                                </div>
                                            </form>
                                    @else
                                        <form action="{{ route('housePublish.store') }}" method="POST" class="mb-3">
                                            @csrf

                                            <input type="text" name="rental_id" hidden value="{{ $rental->id }}">
                                            <input type="text" name="user_name" hidden value="{{ $rental->user->name }}">
                                            <input type="text" name="title" hidden value="{{ $rental->title }}">
                                            <input type="text" name="slug" hidden value="{{ $rental->slug }}">
                                            <input type="text" name="location" hidden value="{{ $rental->location }}">
                                            <input type="text" name="house_type"  hidden value="{{ $rental->house_type }}">
                                            <input type="number" name="price" hidden value="{{ $rental->price }}">
                                            <input type="text" name="time"  hidden value="{{ $rental->time }}">
                                            <input type="text" name="relationship" hidden value="{{ $rental->relationship }}">
                                            <input type="text" name="house_image" hidden value="{{ $rental->house_image }}">
                                            <textarea name="description" type="hidden" hidden value="{{ $rental->description }}"></textarea>
                                            <input type="text" name="contact" hidden value="{{ $rental->contact }}">

                                            <button type="submit" class="btn btn-success text-white">
                                                Publish
                                            </button>
                                        </form>
                                    @endif
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
