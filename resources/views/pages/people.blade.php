<!DOCTYPE html>
<html lang="en">
<head>

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
    @if(empty($people))
        There are no people
    @else
        There are some people
    @endif

    @foreach($people as $person)
        <li>{{$person}}</li>
    @endforeach
</body>
</html>
