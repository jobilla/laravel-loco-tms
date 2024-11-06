# Laravel Loco TMS

This is an integration with the [Loco Translation Management System](https://localise.biz).

## Installation

```sh
composer require jobilla/laravel-loco-tms
```

## Configuration

To use the library, you'll need to set your Loco API Key for your translation project.
Either set the environment variable `LOCO_API_KEY`, or publish the configuration file
and update it with another value.

To publish the configuration file, run:
```sh
php artisan vendor:publish --provider="Jobilla\Loco\LocoServiceProvider"
```

There are two different endpoints used for import and export. It is possible to set different parameters on those endpoints. Parameters for export endpoint can be found [here](https://localise.biz/api/docs/export/exportall). Parameters for import endpoint can be found [here](https://localise.biz/api/docs/import/import). Those paramters can be set in configuration file of the package.

For example, this is how order parameter can be set in configuration file:

```php
'export_params' => [
        'order' => 'id',
    ],
```
