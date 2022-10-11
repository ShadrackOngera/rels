@extends('layouts.app')
@section('content')
    <div>
        <div class="container">


            <ul>
                <li class="nav-item">
                    <a href="/rentals/create">Create new Housing offer</a><br>
                </li>
                <li class="nav-item">
                    <a href="{{ route('post.create') }}">Create new Land offer</a><br>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home') }}">Admin Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.all') }}">View Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('publish.index') }}">All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rentals.home') }}">Unpublished Houses Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">View Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Main Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('land.home') }}">Land Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('house.home') }}">Housing Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
