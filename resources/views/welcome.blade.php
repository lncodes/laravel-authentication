<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        @if(session('status'))
            <p>{{session('status')}}</p>
        @endif
        <h1>Welcome To Our Homepage</h1>
        <form action="{{route('auth.logout')}}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </body>
</html>