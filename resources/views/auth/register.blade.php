@extends('layouts.app')

@section('content')
<div class="main">
    <div class="inner">
        <div class="form__wrapper">
            <h2 class="page-heading">ユーザー新規登録</h2>

            {{-- <%# 「モデル名」にはUserモデルであれば@userを渡しましょう。%>
            <%# 「新規登録機能へのパス」は、devise導入後にrails routesを実行してdevise/registrations#createへのパスを確認し、記載してください。 %> --}}
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field">
                    <label for="email">{{ __('メールアドレス') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="password">{{ __('パスワード（6文字以上）') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="password-confirm">{{ __('パスワード再入力') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="field">
                    <label for="name">{{ __('ユーザー名') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="profile">{{ __('プロフィール') }}</label>

                    <div class="col-md-6">
                        <textarea id="profile" class="form__text @error('profile') is-invalid @enderror" name="profile" required autocomplete="profile" autofocus>{{ old('profile') }}</textarea>

                        @error('profile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="occupation">{{ __('所属') }}</label>

                    <div class="col-md-6">
                        <textarea id="occupation" class="form__text @error('occupation') is-invalid @enderror" name="occupation" required autocomplete="occupation" autofocus>{{ old('occupation') }}</textarea>

                        @error('occupation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label for="position">{{ __('役職') }}</label>

                    <div class="col-md-6">
                        <textarea id="position" class="form__text @error('position') is-invalid @enderror" name="position" required autocomplete="position" autofocus>{{ old('position') }}</textarea>

                        @error('position')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="action">
                    <button type="submit" class="form__btn">
                        {{ __('新規登録') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
