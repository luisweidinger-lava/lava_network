<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lava Network | Home</title>
</head>
<body>
<h2>Currently Available Lavas</h2>

@if($greeting == "hello")
    <p>Hi from inside the if statement</p>
@endif

<ul>
    @foreach($lavas as $lava)
    <li>
        <p>{{ $lava['name'] }}</p>
        <a href="/lavas/ {{ $lava['id'] }}">View Details</a>
    </li>
      @endforeach
</ul>
</body>
</html>