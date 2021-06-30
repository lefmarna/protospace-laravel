<div class="card">
  {{-- <%= link_to image_tag("プロトタイプの画像", class: :card__img ), root_path%> --}}
  <div class="card__body">
    <a href="{{ route('prototypes.show', ['prototype' => $prototype->id]) }}" class="card__title">{{ $prototype->title }}</a>
    <p class="card__summary">
      {{ $prototype->catch_copy }}
    </p>
    <a href="{{ route('users.show', ['user' => $prototype->user->id]) }}" class="card__user">by {{ $prototype->user->name }}</a>
  </div>
</div>