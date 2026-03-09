<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name', 'Hardware Shop') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen antialiased">
    <div class="relative min-h-screen overflow-hidden">
        <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_left,rgba(189,93,56,0.18),transparent_28%),radial-gradient(circle_at_right_center,rgba(20,83,45,0.15),transparent_26%),linear-gradient(135deg,#f7f3eb_0%,#efe7da_100%)]"></div>
        {{ $slot }}
    </div>
</body>
</html>
