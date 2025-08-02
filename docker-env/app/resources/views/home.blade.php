@extends('layouts.layout')

@section('content')
<div class="container mt-5 text-center">
    <h2 class="mb-4">GrubLogへようこそ！</h2>
    <p>店舗のレビューを投稿・検索できるサービスです。</p>
    <a href="{{ route('stores.index') }}" class="btn btn-primary">店舗一覧を見る</a>
</div>
@endsection
