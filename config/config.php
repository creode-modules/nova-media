<?php

return [
    'name' => 'NovaMedia',

    /*
    |--------------------------------------------------------------------------
    | Disk
    |--------------------------------------------------------------------------
    |
    | This value is the name of the disk where media will be stored. This can
    | be any disk that you have configured in your filesystems.php config file.
    |
    */
    'disk' => env('NOVA_MEDIA_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Image Types
    |--------------------------------------------------------------------------
    |
    | Stores mime types for individual image types. This is used to determine
    | if a file is an image or not.
    |
    */
    'image_mime_types' => [
        'image/jpeg',
        'image/png',
        'image/gif',
        'image/svg+xml',
    ],
];
