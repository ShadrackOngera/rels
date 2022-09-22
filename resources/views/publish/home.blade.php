@extends('layouts.app')
@section('content')
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
                                        <h6 class="">Size: <strong>{{ $publish->size }}</strong></h6>
                                        <h6 class="text-capitalize">Posted by <strong>{{ $publish->user_name }}</strong></h6>
                                        <h6>Ksh. <strong>{{ number_format($publish->price) }}</strong></h6>
                                        <h6>Title Deed: <strong>{{ $publish->deed }}</strong></h6>
                                        <h6>Sold By <strong>{{ $publish->type }}</strong></h6>
                                        <small>Published on <span class="fst-italic">{{ date('jS M Y', strtotime($publish->updated_at)) }}</span></small><br>
                                    </div>
                                    <div class="col-sm-6 banner-land position-relative rounded-3">
                                        @if($publish->deed_img == NULL )
                                            <div class="py-5">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <h2 class="text-danger text-center">Error Loading Image</h2>
                                                </div>
                                            </div>
                                        @else
                                            <img src="{{ asset('storage/'.$publish->deed_img) }}" alt="Title-Deed" class="img-fluid">
                                        @endif
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
