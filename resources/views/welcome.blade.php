<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lava Network</title>

    @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">
<h1>Welcome to the Luis Lava Network</h1>
<p>Click the button below to view the list of Lavas.</p>

<a href="/lavas" class="btn m-4 inline-block">
    Find Lavas!
</a>
</body>
</html>
