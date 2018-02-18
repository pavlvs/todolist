<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todolist</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc._navbar', ['some' => 'data'])
    <div class="container">
        @include('inc._messages', ['some' => 'data'])
        @yield('content', 'default')
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright &copy;2018 Todolist, All Rights Reserved</p>
    </footer>
</body>
</html>