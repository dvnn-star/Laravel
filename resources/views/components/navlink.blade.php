{{-- Props/custom properti  --}}
@props(['active' => false])

{{-- Components --}}
{{-- merge digabung dengan class yang ada di layout --}}
<a {{$attributes -> merge(['class' => $active ? 'text-rose-800 font-bold' : '']) }} > {{$slot}} </a>

