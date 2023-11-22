@inject ('mediaService', 'Modules\NovaMedia\app\Services\MediaService')

@php
    $media = $mediaService->getMediaItemById($id);
@endphp

@if ($media)
    <img src="{{ $media->url }}" alt="{{ $media->alt_text }}" class="media-image">
@endif
