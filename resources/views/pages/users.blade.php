@extends('layouts.app')
@section('content')
    <div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Account Type</th>
                        <th scope="col">Make Seller</th>
                        <th scope="col">Make Admin</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                        <td>
                            <form action="{{ route('admins.makeSeller') }}" method="POST">
                                @csrf
                                <input type="text" value="{{ $user->id }}" hidden name="user_id">
                                <button class="btn btn btn-outline-info" type="submit" >
                                    Make Seller
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
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
