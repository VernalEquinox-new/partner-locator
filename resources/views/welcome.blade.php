<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Netwrix Partner Locator</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/301cba8783.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="../../css/app.css">
    </head>
    <body>
      <div id="app">
         <page-component></page-component>
      </div>
      <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>