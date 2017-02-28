<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>首页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{HTML::script('js/jquery.min.js')}}
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::script('js/bootstrap.min.js')}}

</head>
<body>

@yield('content')
<div class="container">
    @if(Session::has('message'))
        <script>alert("{{Session::get('message')}}");</script>
    @endif
</div>
</body>
</html>