@extends('layouts.app')
@section('content')
    <div>
        <div class="container">

            <div class="row text-center">
                <div class="col-sm-6">
                    <ul>
                        <li class="nav-item">
                            <a href="/rentals/create">Create new Housing offer</a><br>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('housePublish.home') }}">All Published Houses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('rentals.home') }}">Unpublished Houses Posts</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6">
                    <ul>
                        <li class="nav-item">
                            <a href="{{ route('post.create') }}">Create new Land offer</a><br>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.index') }}">Unpublished Land Posts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('land.home') }}">Published land Offers</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="py-5"></div>


            <ul>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mails') }}">Mails</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.all') }}">View Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Main Home</a>
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
