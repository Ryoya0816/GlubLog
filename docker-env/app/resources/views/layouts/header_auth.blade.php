<header class="p-3 bg-light border-bottom">
    <div class="container d-flex justify-content-between align-items-center">
        {{-- ロゴ（クリックでトップページへ） --}}
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="GrubLog ロゴ" width="150">
        </a>

        {{-- ログアウトボタン --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-secondary">ログアウト</button>
        </form>
    </div>
</header>
