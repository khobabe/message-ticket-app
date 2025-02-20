<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<nav class="flex justify-between bg-slate-800 text-white px-5 py-3 capitalize">
    <h2 class="">ticket message app</h2>
    <ul class="flex gap-3">
        <li><a href="">home</a></li>
        <li><a href="">support</a></li>
        <li><a href="">admin</a></li>
    </ul>
</nav>
<body>
    {{ $slot }}
</body>

</html>
