@extends('layouts.app')
@section('content')
    <div style="min-height: 75vh">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach($mails as $mail)
                        <th scope="row">{{ $mail->id }}</th>
                        <td>{{ $mail->email }}</td>
                    @endforeach
                </tr>
                </tbody>
            </table>

            <a href="{{ route('export.mails') }}" class="btn btn-primary">Export to pdf</a>
        </div>
    </div>
@endsection
