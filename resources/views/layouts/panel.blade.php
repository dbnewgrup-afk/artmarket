<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Panel' }}</title>
</head>
<body style="font-family: Inter, system-ui, sans-serif; background:#f3f4f6; margin:0;">
<div style="display:flex; min-height:100vh;">
    <aside style="width:240px; background:#111827; color:#fff; padding:24px;">
        <h2 style="margin:0 0 16px;">{{ $panelTitle ?? 'Panel' }}</h2>
        @yield('sidebar')
    </aside>
    <main style="flex:1; padding:24px;">
        @yield('panel-content')
    </main>
</div>
</body>
</html>
