<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page.title', 'Laravel')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

  <style>
    .container { max-width: 720px; }
    .required:after { content: "*"; color: red;}
  </style>
</head>

<body>
    <div class="d-flex flex-column min-vh-100 justify-content-between">
        @include('includes.alert')
        @include('includes.header')

        <main class="flex-grow-1 py-3">
            @yield('content')
        </main>

        @include('includes.footer')

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.min.js">
</body>
</html>