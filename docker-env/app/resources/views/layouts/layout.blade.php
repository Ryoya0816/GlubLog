<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'グラブログ')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layouts.header_guest') {{-- ログイン前 or 後で出し分け予定 --}}
    
    <main class="container mt-4">
        @yield('content')
    </main>

    <footer class="text-center py-4 text-muted small mt-5">
        © 2025 GlubLog
    </footer>
</body>
</html>
