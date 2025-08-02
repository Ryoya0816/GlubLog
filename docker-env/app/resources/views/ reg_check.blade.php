@extends('layouts.layout')

@section('content')
<div class="container mt-5" style="max-width: 600px;">
    <h2 class="text-center mb-4">以下の内容で登録します</h2>

    <div class="mb-3">
        <strong>ユーザー名：</strong> {{ $name }}
    </div>

    <div class="mb-3">
        <strong>メールアドレス：</strong> {{ $email }}
    </div>

    <div class="mb-4">
        <strong>パスワード：</strong> {{ $password_hidden }}
    </div>

    <form method="POST" action="{{ route('register.final') }}">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="password" value="{{ $password }}">

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">登録</button>
        </div>
    </form>
</div>
@endsection
