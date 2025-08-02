<header class="p-3 bg-light border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        {{-- ロゴ（クリックでトップページへ） --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="GrubLog ロゴ" width="150">
        </a>

        {{-- ゲスト用ナビゲーション（ログイン／新規登録） --}}
        <div>
            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">ログイン</a>
            <a href="{{ route('register') }}" class="btn btn-primary">新規登録</a>
        </div>
    </div>
</header>
