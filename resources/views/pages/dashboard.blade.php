@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <h5>Hello {{ auth()->user()->name }}, This Is Your Dashboard.</h5>
            <p>
                Your Dashboard Helps you navigate easily across all your pages and view all things happening at a glance.
            </p>

        </div>
    </div>
@endsection
