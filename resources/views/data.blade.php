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

  {{-- For the shared data in "UserDataProvider.php" --}}
  <h3> ========== Car info ========= </h3>
  {{ $car->carname }}
  <p>Motor size is {{ $car->motorsize }} </p>


  <br>
  <br>
  <br>
  {{-- From composer views --}}
  <h3>From composer views</h3>
  {{ $composerData['username'] }}
  <br>
  {{ $composerData['phoneNum'] }}


</body>

</html>
