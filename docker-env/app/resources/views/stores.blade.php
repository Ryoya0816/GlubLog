@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">店舗一覧</h2>

    {{-- 検索フォーム --}}
    <form method="GET" action="{{ route('store.index') }}" class="d-flex mb-3">
        <input type="text" name="keyword" value="{{ $keyword }}" class="form-control me-2" placeholder="店舗名・内容・住所で検索">
        <select name="rating" class="form-select me-2" style="max-width: 200px;">
            <option value="">レビュー点数を選択</option>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" {{ $rating == $i ? 'selected' : '' }}>{{ $i }} 点以上</option>
            @endfor
        </select>
        <button type="submit" class="btn btn-primary">検索</button>
    </form>

    {{-- 店舗表示 --}}
    @foreach ($stores as $store)
        <a href="{{ route('store.detail', ['store' => $store->id]) }}" class="text-decoration-none text-dark">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $store->name }}</h5>
                    <p class="card-text">住所：{{ $store->address }}</p>
                    <p class="card-text">平均評価：
                        {{-- 平均点表示：レビューが存在するかチェック --}}
                        @php
                            $avg = $store->reviews()->avg('point');
                        @endphp
                        {{ $avg ? round($avg, 1) . ' 点' : '点' }}
                    </p>
                </div>
            </div>
        </a>
    @endforeach

    {{-- ページネーション --}}
    <div class="mt-4">
        {{ $stores->appends(['keyword' => $keyword, 'rating' => $rating])->links() }}
    </div>
</div>
@endsection
