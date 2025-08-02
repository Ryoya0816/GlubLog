@extends('layouts.layout')

@section('content')
<div class="container text-center">
    <h2>新規登録確認</h2>
    <p>ユーザー名：{{ $name }}</p>
    <p>メールアドレス：{{ $email }}</p>
    <p>パスワード：{{ $password_hidden }}</p>

    <form method="POST" action="{{ route('register.final') }}">
        @csrf
        <input type="hidden" name="name" value="{{ $name }}">
        <input type="hidden" name="email" value="{{ $email }}">
        <input type="hidden" name="password" value="{{ $password }}">

        <button type="submit" class="btn btn-success">登録</button>
    </form>

    <form method="GET" action="{{ route('register.form') }}">
        <button type="submit" class="btn btn-secondary mt-2">戻る</button>
    </form>
</div>
@endsection
