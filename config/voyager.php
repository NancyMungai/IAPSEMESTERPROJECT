<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager user configs
    |
    */

    'user' => [
        'add_default_role_on_register' => true,
        'default_role'                 => 'user',
        'default_avatar'               => 'users/default.png',
        'redirect'                     => '/admin',
    ],

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'TCG\\Voyager\\Http\\Controllers',
    ],

    /*
    |--------------------------------------------------------------------------
    | Models config
    |--------------------------------------------------------------------------
    |
    | Here you can specify default model namespace when creating BREAD.
    | Must include trailing backslashes. If not defined the default application
    | namespace will be used.
    |
    */

    'models' => [
       // 'namespace' => 'App\\Models\\',
    ],

    /*
    |--------------------------------------------------------------------------
    | Storage Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify attributes related to your application file system
    |
    */

    'storage' => [
        'disk' => 'public',
    ],

    /*
    |--------------------------------------------------------------------------
    | Media Manager
    |--------------------------------------------------------------------------
    |
    | Here you can specify if media manager can show hidden files like(.gitignore)
    |
    */

    'hidden_files' => false,

    /*
    |--------------------------------------------------------------------------
    | Database Config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager database settings
    |
    */

    'database' => [
        'tables' => [
            'hidden' => ['migrations', 'data_rows', 'data_types', 'menu_items', 'password_resets', 'permission_role', 'personal_access_tokens', 'settings'],
        ],
        'autoload_migrations' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Multilingual configuration
    |--------------------------------------------------------------------------
    |
    | Here you can specify if you want Voyager to ship with support for
    | multilingual and what locales are enabled.
    |
    */

    'multilingual' => [
        /*
         * Set whether or not the multilingual is supported by the BREAD input.
         */
        'enabled' => false,

        /*
         * Select default language
         */
        'default' => 'en',

        /*
         * Select languages that are supported.
         */
        'locales' => [
            'en',
            //'pt',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard config
    |--------------------------------------------------------------------------
    |
    | Here you can modify some aspects of your dashboard
    |
    */

    'dashboard' => [
        // Add custom list items to navbar's dropdown
        'navbar_items' => [
            'voyager::generic.profile' => [
                'route'      => 'voyager.profile',
                'classes'    => 'class-full-of-rum',
                'icon_class' => 'voyager-person',
            ],
            'voyager::generic.home' => [
                'route'        => '/',
                'icon_class'   => 'voyager-home',
                'target_blank' => true,
            ],
            'voyager::generic.logout' => [
                'route'      => 'voyager.logout',
                'icon_class' => 'voyager-power',
            ],
        ],

        'widgets' => [

        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Automatic Procedures
    |--------------------------------------------------------------------------
    |
    | When a change happens on Voyager, we can automate some routines.
    |
    */

    'bread' => [
        // When a BREAD is added, create the Menu item using the BREAD properties.
        'add_menu_item' => true,

        // which menu add item to
        'default_menu' => 'admin',

        // When a BREAD is added, create the related Permission.
        'add_permission' => true,

        // which role add premissions to
        'default_role' => 'admin',
    ],

    /*
    |--------------------------------------------------------------------------
    | UI Generic Config
    |--------------------------------------------------------------------------
    |
    | Here you change some of the Voyager UI settings.
    |
    */

    'primary_color' => '#F28123',

    'show_dev_tips' => true, // Show development tip "How To Use:" in Menu and Settings

    // Here you can specify additional assets you would like to be included in the master.blade
    'additional_css' => [
        'assets/img/favicon.png',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700',
        'https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap',
        'public/assets/css/all.min.css',
        'public/assets/bootstrap/css/bootstrap.min.css',
        'public/assets/css/owl.carousel.css',
        'public/assets/css/magnific-popup.css',
        'public/assets/css/animate.css',
        'public/assets/css/meanmenu.min.css',
        'public/assets/css/main.css',
        'public/assets/css/responsive.css',
    ],
    

    'additional_js' => [
        'public/assets/js/jquery-1.11.3.min.js',
        'public/assets/bootstrap/js/bootstrap.min.js',
        'public/assets/js/jquery.countdown.js',
        'public/assets/js/jquery.isotope-3.0.6.min.js',
        'public/assets/js/waypoints.js',
        'public/assets/js/owl.carousel.min.js',
        'public/assets/js/jquery.magnific-popup.min.js',
        'public/assets/js/jquery.meanmenu.min.js',
        'public/assets/js/sticker.js',
        'public/assets/js/main.js',
    ],
    

    'googlemaps' => [
        'key'    => env('GOOGLE_MAPS_KEY', ''),
        'center' => [
            'lat' => env('GOOGLE_MAPS_DEFAULT_CENTER_LAT', '32.715738'),
            'lng' => env('GOOGLE_MAPS_DEFAULT_CENTER_LNG', '-117.161084'),
        ],
        'zoom' => env('GOOGLE_MAPS_DEFAULT_ZOOM', 11),
    ],

    /*
    |--------------------------------------------------------------------------
    | Model specific settings
    |--------------------------------------------------------------------------
    |
    | Here you change some model specific settings
    |
    */

    'settings' => [
        // Enables Laravel cache method for
        // storing cache values between requests
        'cache' => false,
    ],

    // Activate compass when environment is NOT local
    'compass_in_production' => false,

    'media' => [
        // The allowed mimetypes to be uploaded through the media-manager.
        // 'allowed_mimetypes' => '*', //All types can be uploaded
        'allowed_mimetypes' => [
          'image/jpeg',
          'image/png',
          'image/gif',
          'image/bmp',
          'video/mp4',
        ],
        //Path for media-manager. Relative to the filesystem.
        'path'                => '/',
        'show_folders'        => true,
        'allow_upload'        => true,
        'allow_move'          => true,
        'allow_delete'        => true,
        'allow_create_folder' => true,
        'allow_rename'        => true,
        /*'watermark'           => [
            'source'         => 'watermark.png',
            'position'       => 'bottom-left',
            'x'              => 0,
            'y'              => 0,
            'size'           => 15,
       ],
       'thumbnails'          => [
           [
                'type'  => 'fit',
                'name'  => 'fit-500',
                'width' => 500,
                'height'=> 500
           ],
       ]*/
    ],
];
