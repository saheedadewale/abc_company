<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>ABC Company</title>

    </head>
    <body>
            @include('inc.navbar')
  <div class="container">
<p></p>
        @yield('content')
  </div>

  <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
      CKEDITOR.replace( 'article-ckeditor' );
  </script>
  {{-- //implement with jquery --}}
  {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script>
      $('textarea').ckeditor();
      // $('.textarea').ckeditor(); // if class is prefered.
  </script> --}}
    </body>
</html>
