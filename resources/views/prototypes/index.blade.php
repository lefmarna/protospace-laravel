@extends('layouts.app')

@section('content')
<main class="main">
  <div class="inner">
    @auth
    <div class="greeting">
        こんにちは、<a href="{{ route('users.show', ['user' => Auth::id()]) }}" class="greeting__link">{{ Auth::user()->name }}さん</a>
    </div>
    @endauth
    <div class="card__wrapper">
      @foreach ($prototypes as $prototype)
        @include('prototypes.prototype')
      @endforeach
    </div>
  </div>
</main>
@endsection