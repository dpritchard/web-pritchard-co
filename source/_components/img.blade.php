@inject('str', 'Illuminate\Support\Str')

@props(['src', 'caption' => ''])

<figure {{ $attributes->merge(['class' => 'clear-both justify-items-center']) }} >
    <img src="{{ url($src) }}" class="rounded-md m-auto" alt="{{ $attributes['alt'] ?? $caption }}"/>
@if ($caption)
    <figcaption class="text-xs text-slate-500 text-center">{!! $str->inlinemarkdown($caption) !!}</figcaption>
@endif
</figure>
