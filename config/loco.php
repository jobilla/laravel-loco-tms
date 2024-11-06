<?php

return [
    'api_key' => env('LOCO_API_KEY'),

    /**
     * Additional params to use for the export endpoint
     * https://localise.biz/api/docs/export/exportall
     */
    'export_params' => [],

    /**
     * Additional params to use for the import endpoint
     * https://localise.biz/api/docs/import/import
     *
     */
    'import_params' => [],
];
