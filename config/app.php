<?php

return [

    'app' => [

        /*
         * The name of the theme you want to use.
         */

        'theme' => 'writer',

        /*
         * Enable debugging for developer friendly exception handling.
         */

        'debug' => APP_DEBUG,

        /*
         * Specify the filesystem your content will live on.
         * Supported drivers include: local, dropbox, azure, ftp and s3. Be sure to provide any necessary credentials for
         * your chosen driver.
         */

        'filesystem' => [

            'driver' => APP_FILESYSTEM,

            'key' => 'Your Dropbox API app key',

            'secret' => 'Your Dropbox API app secret',

        ],

        /*
         * These are some essential application paths.
         */

        'paths' => [

            'resources' => '../content',

            'log' => '../var/log',

            'cache' => '../var/cache',

        ],

    ],

];