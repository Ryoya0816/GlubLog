<!DOCTYPE html>
<html>
<head>
    <title>パスワード再設定</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

@include('partials.header_guest')

<div class="container mt-5" style="max-width: 400px;">
    <h2 class="text-center mb-4">パスワード再設定</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">新しいパスワード</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">確認用パスワード</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success">パスワード再設定</button>
        </div>
    </form>
</div>

</body>
</html>
