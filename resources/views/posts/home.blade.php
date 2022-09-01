@extends('layouts.app')

@section('content')
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card h-100">
                        <div class="card-body">
                            <h2 class="mb-3">Land on sale</h2>
                            <div class="d-flex justify-content-between">
                                <h6 class="">location</h6>
                                <h4 class="">size</h4>
                            </div>
                            <img src="{{ asset('images/pics/meru-land.jpg') }}" alt="Girl in a jacket" class="rounded-3 img-fluid mb-3">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>seller name</h6>
                                <h6>Outright price: Ksh 1,000,000</h6>
                            </div>
                            <a href="{{ route('show.post') }}" class="btn btn-info w-100 text-white">read more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
