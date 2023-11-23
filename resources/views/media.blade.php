@inject ('mediaService', 'Modules\NovaMedia\app\Services\MediaService')

@php
    $media = $mediaService->getMediaItemById($id);
@endphp

@if ($media->isImage())
    @include('nova-media::partials.image', ['media' => $media])
@endif
