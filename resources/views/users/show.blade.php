@extends('layouts.app')

@section('content')
<div class="main">
  <div class="inner">
    <div class="user__wrapper">
      <h2 class="page-heading">
        {{ $user->name }}さんの情報
      </h2>
      <table class="table">
        <tbody>
          <tr>
            <th class="table__col1">名前</th>
            <td class="table__col2">{{ $user->name }}</td>
          </tr>
          <tr>
            <th class="table__col1">プロフィール</th>
            <td class="table__col2">{{ $user->profile }}</td>
          </tr>
          <tr>
            <th class="table__col1">所属</th>
            <td class="table__col2">{{ $user->occupation }}</td>
          </tr>
          <tr>
            <th class="table__col1">役職</th>
            <td class="table__col2">{{ $user->position }}</td>
          </tr>
        </tbody>
      </table>
      <h2 class="page-heading">
        {{ $user->name }}さんのプロトタイプ
      </h2>
      <div class="user__card">
        <%# 部分テンプレートでそのユーザーが投稿したプロトタイプ投稿一覧を表示する %>
      </div>
    </div>
  </div>
</div>
@endsection