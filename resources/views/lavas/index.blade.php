<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lava Network | Home</title>
</head>
<body>
<h2>Currently Available Lavas</h2>
<p>{{ $greeting }}</p>

<ul>
    <li>
        <a href="/lava/{{$lavas[0]["id"]}}">
            {{ $lavas[0]["name"] }}
        </a>
    </li>
    <li>
        <a href="/lava/{{$lavas[1]["id"]}}">
            {{ $lavas[1]["name"] }}
        </a>
    </li>
</ul>
</body>
</html>