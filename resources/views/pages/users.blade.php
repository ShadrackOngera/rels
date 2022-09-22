@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="align-items-center">
            @if (\Session::has('message'))
                <div class="alert alert-success">
                    {!! \Session::get('message') !!}
                </div>
            @endif
        </div>
    </div>
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account Type</th>
                        @can('give role')
                            <th scope="col">Make Seller</th>
                        @endcan
                        @can('make moderator')
                            <th scope="col">Make Moderator</th>
                            <th scope="col">Make Admin</th>
                        @endcan
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                        @can('make seller')
                            <td>
                                <form action="{{ route('admins.makeSeller') }}" method="POST">
                                    @csrf
                                    <input type="text" value="{{ $user->id }}" hidden name="user_id">
                                    <button class="btn btn btn-outline-info" type="submit" >
                                        Make Seller
                                    </button>
                                </form>
                            </td>
                        @endcan
                        @can('make moderator')
                            <td>
                                <form action="{{ route('admins.makeModerator') }}" method="POST">
                                    @csrf
                                    <input type="text" value="{{ $user->id }}" hidden name="user_id">
                                    <button class="btn btn btn-outline-info" type="submit" >
                                        Make Moderator
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('admins.makeAdmin') }}" method="POST">
                                    @csrf
                                    <input type="text" value="{{ $user->id }}" hidden name="user_id">
                                    <button class="btn btn btn-outline-info" type="submit" >
                                        Make Admin
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
@endsection
