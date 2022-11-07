@extends('layouts.app')
@section('content')
    <div style="min-height: 80vh">
        @can('create post')
            <div>
                <div class="py-3"></div>
                <div class="container mb-3 align-self-center">
                    <div class="position-relative">
                        <div class="position-absolute top-50 start-50 translate-middle col-sm-4">
                            <a href="{{ route('rentals.create') }}" class="btn btn-info text-white w-100">
                                New House Offer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="py-3"></div>
            </div>
        @endcan

        <div>
            <div class="container">
                <section>
                    @include('partials.houseFilter')
                </section>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($rentals as $rental)
                    <div class="col-sm-6 mb-4 justify-content-center">
                        <div class="card shadow h-100">
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3">
                                        <h2 class="mb-3 text-capitalize">{{ $rental->title }}</h2>
                                        <h4 class="">Location: {{ $rental->location }}</h4>
                                        <h6 class="">House Type: <strong>{{ $rental->house_type }}</strong></h6>
                                        <h6 class="text-capitalize">Posted by <strong>{{ $rental->user_name }}</strong></h6>
                                        <h6>Ksh. <strong>{{ number_format($rental->price) }}</strong></h6>
                                        <h6>Time: <strong>{{ $rental->time }}</strong></h6>
                                        <h6>Sold By <strong>{{ $rental->relationship }}</strong></h6>
                                        <small>Published on <span class="fst-italic">{{ date('jS M Y', strtotime($rental->updated_at)) }}</span></small><br>
                                    </div>
                                    @if($rental->house_image == NULL )
                                        <div class="col-sm-6 banner-land position-relative rounded-3">
                                            <div class="py-5">
                                                <div class="position-absolute top-50 start-50 translate-middle">
                                                    <h2 class="text-danger text-center">Error Loading Image</h2>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="col-sm-6 align-self-center">
                                            <img src="{{ asset('storage/'.$rental->house_image) }}" alt="House Image" class="img-fluid w-100 rounded-2">
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <a href="{{ route('rentals.show', $rental->slug)  }}" class="btn btn-info w-100 text-white mb-3">View Offer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
