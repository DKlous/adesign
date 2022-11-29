<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">

<head>
    @include('head/html_head_components')
    <title>{{ 'Avigail Design' }}</title>
    <meta name="description" content="Grafisch Ontwerp, Fotografie, Fine Art">
</head>

<body class="body antialiased bg-gray-100 dark:bg-gray-900">
    <div class="containerHeader">
        @include('nav/navigation') {{-- Navigation with logo on the left side --}}
        <div class="formcontainer">
            <form action="userLogin" method="POST">
                {{-- Send the CSRF Token. This is an unique token, that is sent with every POST request.
            Inclusing a CSRF Token is required by Laravel --}}
                @csrf
                <h1>Admin Login</h1>
                <input type="email" name="email" placeholder="enter email"><br />
                <input type="password" name="password" placeholder="enter password"><br />
                <input type="submit" name="login" value="Submit">
                <p style="color: red; margin:0;">{{ session()->pull('LoginSystemMessage') }}</p>
            </form>
        </div>
    </div>
</body>

</html>
