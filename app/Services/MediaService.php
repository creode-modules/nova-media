<?php

namespace Modules\NovaMedia\app\Services;

use Modules\NovaMedia\app\Models\Media;

class MediaService {
    /**
     * Gets a media item by its ID.
     *
     * @param int $id
     * @return ?Media
     */
    public function getMediaItemById($id) {
        return Media::find($id);
    }
}
