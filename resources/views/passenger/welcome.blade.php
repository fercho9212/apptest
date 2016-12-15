<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Title</title>
        <link rel="stylesheet" href="{{ asset('css/general.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    </head>
    <body>

      {{$passenger->pas_name}}
      {{$passenger->pas_last}}
      {{$passenger->state}}

      <br>
      <br>
      <h3>Este es los estadots</h3>
      {{$s->state}}



    </body>
</html>
