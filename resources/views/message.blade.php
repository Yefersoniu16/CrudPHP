<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    @php
      $program = 'Desarrollo de software';
      $age= 18
    @endphp

    @if ($age >= 18)
    <p>Es mayor de edad</p>
    @endif

    @for ($i = 0; $i <5; $i++)
    <p>{{$i}}</p>
    @endfor

       <h3>{{$name}}</h3>
       <p>{{$program}}</p>

    </div>

</body>
</html>