<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div><br>')) !!}
        @endif
        <form action="{{route('auth.login')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}"> <br><br>
            <input type="password" name="password" placeholder="Password"> <br><br>
            <input type="checkbox" id="remember" name="remember-me">
            <label for="remember">Remember me</label><br><br>
            <button type="submit">Login</button> 
        </form>
    </body>
</html>