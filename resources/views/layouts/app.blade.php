<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>@yield('title', 'Movies')</title>
    @vite('resources/js/app.js')
 </head>
 <body>

    <header>
    </header>

    <main>
    @yield('content')
    </main>

    <footer>
    </footer>

 </body>