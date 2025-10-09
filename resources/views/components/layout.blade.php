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
        <a href="/offers">All Offers</a>
        <a href="/offers/create">Create New Offer</a>
    </nav>
</header>

<main class="container">
    {{ $slot }}
</main>
</body>
</html>