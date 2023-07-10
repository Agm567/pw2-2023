<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login App</title>
    <link rel="stylesheet" href="{{ asset('assetlanding/style.css') }}">
</head>

<body>
    <div class="square">
        <i style="--clr: #00ff0a"></i>
        <i style="--clr: #ff0057"></i>
        <i style="--clr: #fffd44"></i>
        <form action="/login" method="post">
            @csrf
            <div class="login">
                <h2>Login</h2>
                <div class="inputBx">
                    <input type="email" style="width:100%" value="{{ old('email') }}" name="email"
                        placeholder="Email" autofocus>
                </div>
                <div class="inputBx">
                    <input type="password" style="width:100%" value="{{ old('password') }}" name="password"
                        placeholder="password">
                </div>
                <div class="inputBx">
                    <input type="submit" value="Login">
                </div>
                <div class="links">
                    <a>Don't have an account?</a>
                    <a href="/register">Register</a>
                </div>
            </div>
        </form>
    </div>

    @if ($errors->any())
        <script>
            var errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += '{{ $error }}';
            @endforeach
            alert(errorMessages);
        </script>
    @endif
    @if (session('success'))
        <script>
            alert('{{ session("success") }}');
        </script>
    @endif

</body>

</html>
