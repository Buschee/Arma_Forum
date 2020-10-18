<html>
<head>
    <title>Beitraege</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="{{ route('beitraege.index') }}">Beitraege</a>
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a href="{{ route('beitraege.index') }}" class="btn btn-outline-light">Alle Beitraege</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('beitraege.create') }}" class="btn btn-outline-light">Beitrag erstellen</a>
        </li>
    </ul>
</nav>
<!-- content placeholder -->
@yield('content')
<!-- errors -->
@if($errors)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif
<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>