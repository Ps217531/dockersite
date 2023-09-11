<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Contact - Planten Webshop</title>
</head>
<body class="bg-green-100">
    <header class="bg-green-600 text-white p-4">
        <nav>
            <ul class="flex justify-center">
                <li class="mr-6">
                    <a href="">Home</a>
                </li>
                <li class="mr-6">
                    <a href="about">Over ons</a>
                </li>
                <li>
                    <a href="contact">Contact</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container mx-auto p-8 bg-white rounded-md shadow-md">
        <h1 class="text-4xl font-semibold text-green-800 mb-4">Contact</h1>
        <p class="text-lg text-green-600 mb-8">Heeft u vragen, opmerkingen of speciale verzoeken? Neem gerust contact met ons op.</p>
        <form class="max-w-md mx-auto">
            <div class="mb-4">
                <label for="name" class="block text-green-800 font-semibold">Naam</label>
                <input type="text" id="name" name="name" class="w-full p-2 border rounded-md focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-green-800 font-semibold">E-mail</label>
                <input type="email" id="email" name="email" class="w-full p-2 border rounded-md focus:outline-none focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="message" class="block text-green-800 font-semibold">Bericht</label>
                <textarea id="message" name="message" class="w-full p-2 border rounded-md focus:outline-none focus:border-green-500"></textarea>
            </div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-700">Verzenden</button>
        </form>
        <a href="" class="mt-4 block text-green-500 text-center hover:underline">Terug naar de homepage</a>
    </main>
</body>
</html>
