<?php

namespace Modules\NovaMedia\app\Nova\Fields;

use Modules\NovaMedia\app\Models\Media;
use Laravel\Nova\Fields\Select as SelectField;

class MediaField extends SelectField
{
    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|\Closure|callable|object|null  $attribute
     * @param  (callable(mixed, mixed, ?string):(mixed))|null  $resolveCallback
     * @return void
     */
    public function __construct($name, $attribute = null, $resolveCallback = null)
    {
        parent::__construct($name, $attribute, $resolveCallback);
        $this->optionsCallback = [$this, 'getMediaItems'];
    }

    /**
     * Gets an array of media items.
     *
     * @return array
     */
    public function getMediaItems()
    {
        return Media::get()->pluck('alt_text', 'id');
    }
}
