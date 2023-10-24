<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{env('APP_NAME')}}</title>
</head>
<body class="d-flex flex-column vh-100">
    <header class="mb-3">
        <x-navbar />
    </header>
    <main>
        {{$slot}}
    </main>
    <footer class="mt-auto">

    </footer>
</body>
</html>