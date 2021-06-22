@extends('layouts.app')

@section('content')
<main class="main">
  <div class="inner">
    @auth
    <div class="greeting">
        こんにちは、<a href="{{ route('root') }}" class="greeting__link">{{ Auth::user()->name }}さん</a>
    </div>
    @endauth
    <div class="card__wrapper">
      {{-- <%# 投稿機能実装後、部分テンプレートでプロトタイプ投稿一覧を表示する %> --}}
    </div>
  </div>
</main>
@endsection