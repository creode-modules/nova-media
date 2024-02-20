@inject ('mediaService', 'Modules\NovaMedia\app\Services\MediaService')

@php
    $media = $mediaService->getMediaItemById($id);
    $role = $role ?? false;
@endphp

@if ($media && $media->isImage())
    @include('nova-media::partials.image', ['media' => $media, 'role' => $role])
@endif
