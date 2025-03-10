<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Blade | Practise</title>
  <style>
    .false {
      color: red;
    }

    .true {
      color: rgb(0, 114, 0);
    }
  </style>

</head>

<body>
  <p>Count is {{ $count }} </p>

  @if (isset($count))
    <h3 class="true">count found</h3>
  @else
    <h3 class="false">count is not found!</h3>
  @endif

  <br>

  @isset($count)
    <h3 class="true">count isset</h3>
  @endisset

  <br>

  @unless ($count === 20)
    <p class="false">bla bla bla</p>
  @endunless

  @empty($count)
    <h3 class="false">Count is Empty!</h4>
    @endempty

    <br>

    @empty(!$count)
      <h3 class="true">Count is NOT Empty!</h4>
      @endempty

      <br>

      @switch($count)
        @case(20)
          <h3>From switch cases and it is equal 20</h3>
        @break

        @case(22)
          <h3>From switch cases and it is equal 22</h3>
        @break

        @default
      @endswitch


      <br>



</body>

</html>
