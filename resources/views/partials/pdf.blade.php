<h1>All {{ config('app.name') }} Mails</h1>
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
</div>
