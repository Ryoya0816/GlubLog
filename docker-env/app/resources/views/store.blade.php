{{-- resources/views/store.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    {{-- 店舗情報 --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="{{ asset('storage/' . $store->image) }}" alt="店舗画像" class="img-fluid">
        </div>
        <div class="col-md-8">
            <h2>{{ $store->name }}</h2>
            <p><strong>平均レビュー点：</strong>
                {{ $reviews->count() > 0 ? round($reviews->avg('point'), 1) . ' 点' : 'まだレビューがありません' }}
            </p>
            <p><strong>住所：</strong>{{ $store->address }}</p>
            <p><strong>店舗紹介：</strong>{{ $store->comment }}</p>
        </div>
    </div>

    {{-- レビュー一覧 --}}
    <h3>ユーザーレビュー一覧</h3>
    @forelse ($reviews as $review)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $review->title }}（{{ $review->point }} 点）</h5>
                <p>{{ $review->text }}</p>
                @if ($review->image)
                    <img src="{{ asset('storage/' . $review->image) }}" alt="レビュー画像" class="img-thumbnail" style="max-height: 150px;">
                @endif

                {{-- 違反報告ボタン --}}
                <form action="{{ route('report.form', ['id' => $review->id]) }}" method="GET">
                    <button type="submit" class="btn btn-danger mt-2">① 違反報告</button>
                </form>
            </div>
        </div>
    @empty
        <p>まだレビューがありません。</p>
    @endforelse
</div>
@endsection
