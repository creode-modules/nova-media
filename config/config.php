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
    'disk' => env('MEDIA_DISK', 'public'),
];
