<?php

return [

    'default' => env('FILESYSTEM_DISK', 'public'), // Use 'public' by default

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'), // Laravel's default behavior
            'throw' => false,
            'report' => false,
        ],

        'uploads' => [ // Custom disk for uploads
            'driver' => 'local',
            'root' => public_path('uploads'), // Store in public/uploads
            'url' => env('APP_URL') . '/uploads',
            'visibility' => 'public',
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'), // Corrected default storage path
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
            'report' => false,
        ],
    ],

    'links' => [
        public_path('storage') => storage_path('app/public'), // Keep this only if you're using storage/app/public
    ],

];
