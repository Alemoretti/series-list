<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Series control</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <h1> {{ $title }}</h1>
        {{ $slot }}
    </div>
  </body>
</html>