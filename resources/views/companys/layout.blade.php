<!DOCTYPE html>
<html>
@include('includes.head')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
@include('includes.navbar')
<div class="container">
    @yield('content')
</div>

</body>
</html>
