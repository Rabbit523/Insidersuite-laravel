<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
        ],
        
        'profile_logo' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/profile_logo'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'attach_file' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/attach_file'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'message_img' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/message_img'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'blog_img' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/blog_img'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'career_img' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/career_img'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'department_img' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/department_img'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'newsletter_imgs' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/newsletter_imgs'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'offer_imgs' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/offer_imgs'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'accom_imgs' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/accom_imgs'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'accom_exp_imgs' => [
            'driver' => 'local',
            'root' => public_path('assets/uploads/accom_exp_imgs'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
    ],

];
