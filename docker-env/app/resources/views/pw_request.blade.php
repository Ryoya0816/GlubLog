<!DOCTYPE html>
<html>
<head>
    <title>パスワード再設定案内</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('partials.header_guest')

<div class="container mt-5" style="max-width: 400px;">
    <h2 class="text-center mb-4">パスワード再設定</h2>

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/pw_request">
        @csrf
        <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">メール送信</button>
        </div>
    </form>
</div>
</body>
</html>
