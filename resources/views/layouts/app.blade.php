<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('includes.navbar')

<div class="container" style="margin-top:30px">
  @if(Request::is('/'))
    @include('includes.showcase')
  @endif
  <div class="row">
    <div class="col-md-12">
      @include('includes.messages')
    </div>
    <div class="col-sm-8">
      @yield('content')
    </div>

    <div class="col-sm-4">
      @include('includes.sidebar')
    </div>
    
  </div>
</div>

<footer id="footer" class="text-center">
  <p>Copyrights 2019 &copy; MK</p>
</footer>

</body>
</html>