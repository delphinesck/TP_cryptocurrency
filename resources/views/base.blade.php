<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cryptocurrencies</title>
</head>
<body>
    <header>
        <h1>Cryptocurrencies</h1>
    </header>

    <nav>
    <a href="{{ route('index') }}">Home</a>
    <a href="{{ route('profile') }}">Profile</a>
    </nav>


    @yield('content')

    <br /><br />

    <footer>
    <i>@cryptocurrencies</i>
    </footer>

</body>
</html>