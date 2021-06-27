<form method="POST" action="{{ route('prototypes.' . $action, ['prototype' => $prototype->id]) }}">
  @csrf
  <div class="field">
    <label for="title">プロトタイプの名称</label><br />
    <input type="text" name="title" id="title" value="{{ old('title', $prototype['title']) }}">
  </div>

  <div class="field">
    <label for="title">キャッチコピー</label><br />
    <textarea type="text" class="form__text" name="catch_copy" id="catch_copy">{{ old('catch_copy', $prototype['catch_copy']) }}</textarea>
  </div>

  <div class="field">
    <label for="title">コンセプト</label><br />
    <textarea type="text" class="form__text" name="concept" id="concept">{{ old('concept', $prototype['concept']) }}</textarea>
  </div>

  {{-- この記述によってPUTメソッドで送信することができる --}}
  @if (!empty($prototype->id))
    <input name="_method" type="hidden" value="PUT">
  @endif
  {{-- <div class="field">
    <label for="title">プロトタイプの画像</label><br />
    <input type="file" name="image" id="image">
  </div> --}}
  
  <div class="actions">
    <input type="submit" value="保存する" class="form__btn" />
  </div>
</form>