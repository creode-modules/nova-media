# Nova Media
Simple Nova resource which will work like a media library, allowing you to store different media items.

## Installation
You can install this package with the following command:
`composer require creode/nova-media`

## Usage
Render the field by id within blade:
```
@mediaImage($mediaId)
```

## Configuration
You can configure which filesystem disk to use for the media library by publishing the config file:

`php artisan vendor:publish --tag="nova-media-config"`

And overwriting the disk parameter, alternative you can set the `NOVA_MEDIA_DISK` environment variable.
