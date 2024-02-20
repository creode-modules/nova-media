@if ($media)
    <img @if ($role) role="{{ $role }}" @endif src="{{ $media->url }}" alt="{{ $media->alt_text }}" class="media-image">
@endif
