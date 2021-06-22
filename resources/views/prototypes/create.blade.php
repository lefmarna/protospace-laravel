@extends('layouts.app')

@section('content')
<div class="main">
  <div class="inner">
    <div class="form__wrapper">
      <h2 class="page-heading">新規プロトタイプ投稿</h2>
      @include('prototypes.form')
    </div>
  </div>
</div>
@endsection