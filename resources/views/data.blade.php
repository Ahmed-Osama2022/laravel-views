<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Passing Data</title>
</head>

<body>
  <h3>Passing data in view</h3>
  <br>
  <hr>
  {{-- @php
    dd($user);
  @endphp --}}

  {{ $user->username }}
  <br>
  {{ $user->email }} <span> - is </span> {{ $status }}

</body>

</html>
