<!DOCTYPE html>
<html>
<head>
    <title>新規登録完了</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('partials.header_guest')

<div class="container mt-5 text-center" style="max-width: 400px;">
    <h2 class="mb-4">新規登録完了</h2>
    <p>登録が完了しました！ログインしてください。</p>

    <a href="{{ route('login.form') }}">ログインへ</a>
</div>
</body>
</html>
