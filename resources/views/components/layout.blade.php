@props(['title' => ''])

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ? $title.' - Jejak Rasa' : 'Jejak Rasa' }}</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body{
            font-family:'DM Sans',sans-serif;
            background:#F9FAFB;
        }

        h1,h2,h3{
            font-family:'Playfair Display',serif;
        }
    </style>

</head>

<body class="min-h-screen flex flex-col">

    <x-navbar/>

    <main class="flex-1">

        <div class="max-w-7xl mx-auto px-6 lg:px-10 py-8">

            {{ $slot }}

        </div>

    </main>

</body>
</html>