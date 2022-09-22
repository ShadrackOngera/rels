@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <div class="row">
                @foreach($publishes as $publish)
                    <div class="col-sm-6 mb-4">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3">
                                        <h2 class="mb-3 text-capitalize">{{ $publish->title }}</h2>
                                        <h4 class="">Location: {{ $publish->location }}</h4>
                                        <h5 class="">Size: {{ $publish->size }}</h5>
                                        <h6 class="text-capitalize">Posted by {{ $publish->user_name }}</h6>
                                        <h6>Ksh. {{ number_format($publish->price) }}</h6>
                                        <small>Published on <span class="fw-bold">{{ date('jS M Y', strtotime($publish->updated_at)) }}</span></small><br>
                                        <div>
                                            <h6>Image Link {{ $publish->deed }}</h6>
                                        </div>
                                        <div>
                                            <h6>Seller Type {{ $publish->type }}</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 banner-land position-relative rounded-3">
                                        <div class="py-5">
                                            <div class="position-absolute top-50 start-50 translate-middle">
                                                <h4 class="text-capitalize">{{ $publish->title }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('posts.show', $publish->slug)  }}" class="btn btn-info w-100 text-white mb-3">View Offer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
