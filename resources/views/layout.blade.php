<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>{{$title ?? 'Workopia | Find and list jobs'}}</title>
  </head>

  <body class="bg-red-100">
    <x-header/>
    <h1>Layout component</h1>
  

    <main class="container mx-auto p-4 mt-4">{{$slot}}</main>
  </body>
</html>