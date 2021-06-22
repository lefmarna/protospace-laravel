<form method="POST" action="{{ route('prototypes.store') }}">
  @csrf
  <div class="field">
    <label for="title">プロトタイプの名称</label><br />
    <input type="text" name="title" id="title" value="{{ old('title') }}">
  </div>

  <div class="field">
    <label for="title">キャッチコピー</label><br />
    <textarea type="text" class="form__text" name="catch_copy" id="catch_copy">{{ old('catch_copy') }}</textarea>
  </div>

  <div class="field">
    <label for="title">コンセプト</label><br />
    <textarea type="text" class="form__text" name="concept" id="concept">{{ old('concept') }}</textarea>
  </div>

  {{-- <div class="field">
    <label for="title">プロトタイプの画像</label><br />
    <input type="file" name="image" id="image">
  </div> --}}
  
  <div class="actions">
    <input type="submit" value="保存する" class="form__btn" />
  </div>
</form>