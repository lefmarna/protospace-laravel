@extends('layouts.app')

@section('content')
<div class="main">
    <div class="inner">
        <div class="form__wrapper">
            <h2 class="page-heading">{{ __('ユーザーログイン') }}</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="field">
                    <label for="email">{{ __('メールアドレス') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('ログイン状態を保存') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="actions">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="form__btn">
                            {{ __('ログイン') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="form__btn" href="{{ route('password.request') }}">
                                {{ __('パスワードを忘れた場合') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
