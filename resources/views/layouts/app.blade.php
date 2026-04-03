<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'ArtMarket') }}</title>
    @vite(['resources/js/src/main.tsx'])
</head>
<body style="font-family: Inter, system-ui, sans-serif; margin:0; background:#f8f8f6; color:#1f2937;">
    @yield('content')
</body>
</html>
