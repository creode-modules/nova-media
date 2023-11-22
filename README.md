# Nova Media
Simple Nova resource which will work like a media library, allowing you to store different media items.

## Installation
You can install this package with the following command:
```bash
composer require creode/nova-media
```

You also need to run the migrations which will create a new media table:
```bash
php artisan migrate
```

## Usage
Render the field by id within blade:
```
@include('nova-media::image', ['id' => $imageId])
```

### Media Field
You can also use the media field within your Nova resource:
```php
MediaField::make('Media')
```

This will automatically create a select box which will allow you to select a media item.

## Configuration
You can configure which filesystem disk to use for the media library by publishing the config file:

```bash
php artisan vendor:publish --tag="nova-media-config"
```

And overwriting the disk parameter, alternatively you can set the `NOVA_MEDIA_DISK` environment variable.

## Publishing Views
You can publish the views for this package by running the following command:
```bash
php artisan vendor:publish --tag="nova-media-views"
```

This will add a new view into the `resources/views/vendor/nova-media` directory which you can edit to change the way the media is displayed.
