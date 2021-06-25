@extends('layouts.app')

@section('content')
<div class="main">
  <div class="inner">
    <div class="form__wrapper">
      <h2 class="page-heading">プロトタイプ編集</h2>
      @include('prototypes.form')
    </div>
  </div>
</div>
@endsection