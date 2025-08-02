<!DOCTYPE html>
<html>
<head>
    <title>ログイン画面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('partials.header_guest')

<div class="container mt-5" style="max-width: 400px;">
    <h2 class="text-center mb-4">ログイン</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-1">
            <label class="form-label">パスワード</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3 text-end">
            <a href="/pw_request" class="btn btn-link p-0">※ パスワードを忘れた方はこちら</a>
        </div>

        <div class="d-grid mb-3">
            <button type="submit" class="btn btn-primary">ログイン</button>
        </div>
    </form>

    <div class="text-center">
        <a href="/register-custom" class="btn btn-outline-secondary btn-sm">新規登録はこちら</a>
    </div>
</div>

</body>
</html>
