<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lava Network</title>

    @vite('resources/css/app.css')

</head>
<body>

<header>
    <nav>
        <h1>Lava Network</h1>
        <a href="/lavas">All Lavas</a>
        <a href="/lavas/create">Create New Lavas</a>
    </nav>
</header>

<main class="container">
    {{ $slot }}
</main>
</body>
</html>