<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Account</title>
    <link rel="stylesheet" href="{{ asset('assetlanding/style.css') }}">
</head>

<body>
    <div class="square">
        <i style="--clr: #00ff0a"></i>
        <i style="--clr: #ff0057"></i>
        <i style="--clr: #fffd44"></i>
        <form action="/register" method="post">
            @csrf
            <div class="login">
                <h2>Register</h2>
                <div class="inputBx">
                    <input type="text" style="width:100%" value="{{ old('name') }}" name="name"
                        placeholder="Name" autofocus>
                </div>
                <div class="inputBx">
                    <input type="email" style="width:100%" value="{{ old('email') }}" name="email"
                        placeholder="Email">
                </div>
                <div class="inputBx">
                    <input type="password" style="width:100%" value="{{ old('password') }}" name="password"
                        placeholder="password">
                        <input type="hidden" name="role" value="user">
                </div>
                <div class="inputBx">
                    <input type="submit" value="Register">
                </div>
                <div class="links">
                    <a>Already Account?</a>
                    <a href="/login">Login</a>
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
            var errorMessages = '';
            @foreach ($errors->all() as $error)
                errorMessages += '{{ session("success") }}';
            @endforeach
            alert(errorMessages);
        </script>
    @endif

</body>

</html>
