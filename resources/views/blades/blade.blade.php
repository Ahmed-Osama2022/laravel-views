<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blade | Practise</title>
  <style>
    * {
      margin-top: 0;
      padding: 0
    }

    .blade {
      background-color: #fc0000;
      padding-block: 40px;
      margin-top: 0;
    }

    .false {
      color: red;
    }

    .true {
      color: rgb(0, 114, 0);
    }
  </style>
</head>

<body>
  {{-- This file will be test for blade engine - How to work with blade? --}}

  <div class="blade">
    <h2 style="text-align: center; ">Blade</h2>
  </div>
  <hr>
  {{ date('h:m:s') }}
  <br>
  {{ $user->username }}
  <br>
  @{{ $user - > username }} // For escaping

  {{-- ============================================================================== --}}
  {{-- ============================================================================== --}}
  {{-- ============================================================================== --}}

</body>

</html>
