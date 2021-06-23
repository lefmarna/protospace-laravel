@extends('layouts.app')

@section('content')
<main class="main">
  <div class="inner">
    <div class="prototype__wrapper">
      <p class="prototype__hedding">
        {{ $prototype->title }}
      </p>
      <a href="{{ route('root') }}" class="prototype__user">by {{$prototype->user->name}}</a>
      {{-- <%# プロトタイプの投稿者とログインしているユーザーが同じであれば以下を表示する %>
        <div class="prototype__manage">
          <%= link_to "編集する", root_path, class: :prototype__btn %>
          <%= link_to "削除する", root_path, class: :prototype__btn %>
        </div>
      <%# // プロトタイプの投稿者とログインしているユーザーが同じであれば上記を表示する %> --}}
      <div class="prototype__image">
        {{-- <%= image_tag "プロトタイプの画像" %> --}}
      </div>
      <div class="prototype__body">
        <div class="prototype__detail">
          <p class="detail__title">キャッチコピー</p>
          <p class="detail__message">
            {{ $prototype->catch_copy }}
          </p>
        </div>
        <div class="prototype__detail">
          <p class="detail__title">コンセプト</p>
          <p class="detail__message">
            {{ $prototype->concept }}
          </p>
        </div>
      </div>
      <div class="prototype__comments">
        @auth
          <form method="POST" action="" ></form>
            <div class="field">
              <label for="comment">コメント</label><br />
              <input name="comment" id="comment" />
            </div>
            <div class="actions">
              <input type="submit" class="form__btn" value="送信する" />
            </div>
          </form>
        @endauth
        {{-- <ul class="comments_lists">
          <%# 投稿に紐づくコメントを一覧する処理を記述する %>
            <li class="comments_list">
              {{ $comment }}
              <a href="{{ route('root') }}" class="comment_user">（ ユーザー名 ）</a>
            </li>
          <%# // 投稿に紐づくコメントを一覧する処理を記述する %>
        </ul> --}}
      </div>
    </div>
  </div>
</main>
@endsection
