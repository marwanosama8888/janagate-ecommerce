<?php return array (
  'app' => 
  array (
    'name' => 'Laravel',
    'env' => 'local',
    'debug' => true,
    'url' => 'http://janagate.test',
    'asset_url' => NULL,
    'timezone' => 'UTC',
    'locale' => 'ar',
    'fallback_locale' => 'en',
    'faker_locale' => 'en_US',
    'key' => 'base64:BghDj2ubfFI56Ith8bRK9umuawljZe/ExcN/PKQNvEs=',
    'cipher' => 'AES-256-CBC',
    'providers' => 
    array (
      0 => 'Illuminate\\Auth\\AuthServiceProvider',
      1 => 'Illuminate\\Broadcasting\\BroadcastServiceProvider',
      2 => 'Illuminate\\Bus\\BusServiceProvider',
      3 => 'Illuminate\\Cache\\CacheServiceProvider',
      4 => 'Illuminate\\Foundation\\Providers\\ConsoleSupportServiceProvider',
      5 => 'Illuminate\\Cookie\\CookieServiceProvider',
      6 => 'Illuminate\\Database\\DatabaseServiceProvider',
      7 => 'Illuminate\\Encryption\\EncryptionServiceProvider',
      8 => 'Illuminate\\Filesystem\\FilesystemServiceProvider',
      9 => 'Illuminate\\Foundation\\Providers\\FoundationServiceProvider',
      10 => 'Illuminate\\Hashing\\HashServiceProvider',
      11 => 'Illuminate\\Mail\\MailServiceProvider',
      12 => 'Illuminate\\Notifications\\NotificationServiceProvider',
      13 => 'Illuminate\\Pagination\\PaginationServiceProvider',
      14 => 'Illuminate\\Pipeline\\PipelineServiceProvider',
      15 => 'Illuminate\\Queue\\QueueServiceProvider',
      16 => 'Illuminate\\Redis\\RedisServiceProvider',
      17 => 'Illuminate\\Auth\\Passwords\\PasswordResetServiceProvider',
      18 => 'Illuminate\\Session\\SessionServiceProvider',
      19 => 'Illuminate\\Translation\\TranslationServiceProvider',
      20 => 'Illuminate\\Validation\\ValidationServiceProvider',
      21 => 'Illuminate\\View\\ViewServiceProvider',
      22 => 'Krlove\\EloquentModelGenerator\\Provider\\GeneratorServiceProvider',
      23 => 'App\\Providers\\AppServiceProvider',
      24 => 'App\\Providers\\AuthServiceProvider',
      25 => 'App\\Providers\\EventServiceProvider',
      26 => 'App\\Providers\\RouteServiceProvider',
    ),
    'aliases' => 
    array (
      'App' => 'Illuminate\\Support\\Facades\\App',
      'Arr' => 'Illuminate\\Support\\Arr',
      'Artisan' => 'Illuminate\\Support\\Facades\\Artisan',
      'Auth' => 'Illuminate\\Support\\Facades\\Auth',
      'Blade' => 'Illuminate\\Support\\Facades\\Blade',
      'Broadcast' => 'Illuminate\\Support\\Facades\\Broadcast',
      'Bus' => 'Illuminate\\Support\\Facades\\Bus',
      'Cache' => 'Illuminate\\Support\\Facades\\Cache',
      'Config' => 'Illuminate\\Support\\Facades\\Config',
      'Cookie' => 'Illuminate\\Support\\Facades\\Cookie',
      'Crypt' => 'Illuminate\\Support\\Facades\\Crypt',
      'Date' => 'Illuminate\\Support\\Facades\\Date',
      'DB' => 'Illuminate\\Support\\Facades\\DB',
      'Eloquent' => 'Illuminate\\Database\\Eloquent\\Model',
      'Event' => 'Illuminate\\Support\\Facades\\Event',
      'File' => 'Illuminate\\Support\\Facades\\File',
      'Gate' => 'Illuminate\\Support\\Facades\\Gate',
      'Hash' => 'Illuminate\\Support\\Facades\\Hash',
      'Http' => 'Illuminate\\Support\\Facades\\Http',
      'Js' => 'Illuminate\\Support\\Js',
      'Lang' => 'Illuminate\\Support\\Facades\\Lang',
      'Log' => 'Illuminate\\Support\\Facades\\Log',
      'Mail' => 'Illuminate\\Support\\Facades\\Mail',
      'Notification' => 'Illuminate\\Support\\Facades\\Notification',
      'Password' => 'Illuminate\\Support\\Facades\\Password',
      'Queue' => 'Illuminate\\Support\\Facades\\Queue',
      'RateLimiter' => 'Illuminate\\Support\\Facades\\RateLimiter',
      'Redirect' => 'Illuminate\\Support\\Facades\\Redirect',
      'Request' => 'Illuminate\\Support\\Facades\\Request',
      'Response' => 'Illuminate\\Support\\Facades\\Response',
      'Route' => 'Illuminate\\Support\\Facades\\Route',
      'Schema' => 'Illuminate\\Support\\Facades\\Schema',
      'Session' => 'Illuminate\\Support\\Facades\\Session',
      'Storage' => 'Illuminate\\Support\\Facades\\Storage',
      'Str' => 'Illuminate\\Support\\Str',
      'URL' => 'Illuminate\\Support\\Facades\\URL',
      'Validator' => 'Illuminate\\Support\\Facades\\Validator',
      'View' => 'Illuminate\\Support\\Facades\\View',
    ),
  ),
  'auth' => 
  array (
    'defaults' => 
    array (
      'guard' => 'web',
      'passwords' => 'users',
    ),
    'guards' => 
    array (
      'web' => 
      array (
        'driver' => 'session',
        'provider' => 'users',
      ),
      'customers' => 
      array (
        'driver' => 'session',
        'provider' => 'customers',
      ),
      'vendors' => 
      array (
        'driver' => 'session',
        'provider' => 'vendors',
      ),
      'sanctum' => 
      array (
        'driver' => 'sanctum',
        'provider' => NULL,
      ),
    ),
    'providers' => 
    array (
      'users' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\User',
      ),
      'customers' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Customer',
      ),
      'vendors' => 
      array (
        'driver' => 'eloquent',
        'model' => 'App\\Models\\Vendor',
      ),
    ),
    'passwords' => 
    array (
      'users' => 
      array (
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
      ),
    ),
    'password_timeout' => 10800,
  ),
  'broadcasting' => 
  array (
    'default' => 'log',
    'connections' => 
    array (
      'pusher' => 
      array (
        'driver' => 'pusher',
        'key' => '',
        'secret' => '',
        'app_id' => '',
        'options' => 
        array (
          'cluster' => 'mt1',
          'useTLS' => true,
        ),
      ),
      'ably' => 
      array (
        'driver' => 'ably',
        'key' => NULL,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
      ),
      'log' => 
      array (
        'driver' => 'log',
      ),
      'null' => 
      array (
        'driver' => 'null',
      ),
    ),
  ),
  'cache' => 
  array (
    'default' => 'file',
    'stores' => 
    array (
      'apc' => 
      array (
        'driver' => 'apc',
      ),
      'array' => 
      array (
        'driver' => 'array',
        'serialize' => false,
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'cache',
        'connection' => NULL,
        'lock_connection' => NULL,
      ),
      'file' => 
      array (
        'driver' => 'file',
        'path' => '/home/marwan/Sites/janagate/storage/framework/cache/data',
      ),
      'memcached' => 
      array (
        'driver' => 'memcached',
        'persistent_id' => NULL,
        'sasl' => 
        array (
          0 => NULL,
          1 => NULL,
        ),
        'options' => 
        array (
        ),
        'servers' => 
        array (
          0 => 
          array (
            'host' => '127.0.0.1',
            'port' => 11211,
            'weight' => 100,
          ),
        ),
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'cache',
        'lock_connection' => 'default',
      ),
      'dynamodb' => 
      array (
        'driver' => 'dynamodb',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'table' => 'cache',
        'endpoint' => NULL,
      ),
      'octane' => 
      array (
        'driver' => 'octane',
      ),
    ),
    'prefix' => 'laravel_cache',
  ),
  'cart' => 
  array (
    'calculator' => 'Gloudemans\\Shoppingcart\\Calculation\\DefaultCalculator',
    'tax' => 1.5,
    'database' => 
    array (
      'connection' => NULL,
      'table' => 'shoppingcart',
    ),
    'destroy_on_logout' => false,
    'format' => 
    array (
      'decimals' => 2,
      'decimal_point' => '.',
      'thousand_separator' => ',',
    ),
  ),
  'cors' => 
  array (
    'paths' => 
    array (
      0 => 'api/*',
      1 => 'sanctum/csrf-cookie',
    ),
    'allowed_methods' => 
    array (
      0 => '*',
    ),
    'allowed_origins' => 
    array (
      0 => '*',
    ),
    'allowed_origins_patterns' => 
    array (
    ),
    'allowed_headers' => 
    array (
      0 => '*',
    ),
    'exposed_headers' => 
    array (
    ),
    'max_age' => 0,
    'supports_credentials' => false,
  ),
  'database' => 
  array (
    'default' => 'mysql',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'driver' => 'sqlite',
        'url' => NULL,
        'database' => 'janagate',
        'prefix' => '',
        'foreign_key_constraints' => true,
      ),
      'mysql' => 
      array (
        'driver' => 'mysql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'janagate',
        'username' => 'root',
        'password' => '12345678',
        'unix_socket' => '',
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'prefix_indexes' => true,
        'strict' => true,
        'engine' => NULL,
        'options' => 
        array (
        ),
      ),
      'pgsql' => 
      array (
        'driver' => 'pgsql',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'janagate',
        'username' => 'root',
        'password' => '12345678',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
        'schema' => 'public',
        'sslmode' => 'prefer',
      ),
      'sqlsrv' => 
      array (
        'driver' => 'sqlsrv',
        'url' => NULL,
        'host' => '127.0.0.1',
        'port' => '3306',
        'database' => 'janagate',
        'username' => 'root',
        'password' => '12345678',
        'charset' => 'utf8',
        'prefix' => '',
        'prefix_indexes' => true,
      ),
    ),
    'migrations' => 'migrations',
    'redis' => 
    array (
      'client' => 'phpredis',
      'options' => 
      array (
        'cluster' => 'redis',
        'prefix' => 'laravel_database_',
      ),
      'default' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '0',
      ),
      'cache' => 
      array (
        'url' => NULL,
        'host' => '127.0.0.1',
        'password' => NULL,
        'port' => '6379',
        'database' => '1',
      ),
    ),
  ),
  'filament' => 
  array (
    'path' => 'admin',
    'core_path' => 'filament',
    'domain' => NULL,
    'home_url' => '/',
    'brand' => 'Laravel',
    'auth' => 
    array (
      'guard' => 'web',
      'pages' => 
      array (
        'login' => 'JeffGreco13\\FilamentBreezy\\Http\\Livewire\\Auth\\Login',
      ),
    ),
    'pages' => 
    array (
      'namespace' => 'App\\Filament\\Pages',
      'path' => '/home/marwan/Sites/janagate/app/Filament/Pages',
      'register' => 
      array (
        0 => 'Filament\\Pages\\Dashboard',
      ),
    ),
    'resources' => 
    array (
      'namespace' => 'App\\Filament\\Resources',
      'path' => '/home/marwan/Sites/janagate/app/Filament/Resources',
      'register' => 
      array (
      ),
    ),
    'widgets' => 
    array (
      'namespace' => 'App\\Filament\\Widgets',
      'path' => '/home/marwan/Sites/janagate/app/Filament/Widgets',
      'register' => 
      array (
        0 => 'App\\Filament\\Widgets\\NewProductRequest',
      ),
    ),
    'livewire' => 
    array (
      'namespace' => 'App\\Filament',
      'path' => '/home/marwan/Sites/janagate/app/Filament',
    ),
    'dark_mode' => true,
    'layout' => 
    array (
      'forms' => 
      array (
        'actions' => 
        array (
          'alignment' => 'left',
        ),
        'have_inline_labels' => false,
      ),
      'footer' => 
      array (
        'should_show_logo' => true,
      ),
      'max_content_width' => NULL,
      'notifications' => 
      array (
        'vertical_alignment' => 'top',
        'alignment' => 'right',
      ),
      'sidebar' => 
      array (
        'is_collapsible_on_desktop' => false,
      ),
      'tables' => 
      array (
        'actions' => 
        array (
          'type' => 'Filament\\Tables\\Actions\\LinkAction',
        ),
      ),
    ),
    'favicon' => NULL,
    'default_avatar_provider' => 'Filament\\AvatarProviders\\UiAvatarsProvider',
    'default_filesystem_disk' => 'public',
    'middleware' => 
    array (
      'auth' => 
      array (
        0 => 'Filament\\Http\\Middleware\\Authenticate',
      ),
      'base' => 
      array (
        0 => 'Illuminate\\Cookie\\Middleware\\EncryptCookies',
        1 => 'Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse',
        2 => 'Illuminate\\Session\\Middleware\\StartSession',
        3 => 'Illuminate\\Session\\Middleware\\AuthenticateSession',
        4 => 'Illuminate\\View\\Middleware\\ShareErrorsFromSession',
        5 => 'Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken',
        6 => 'Illuminate\\Routing\\Middleware\\SubstituteBindings',
        7 => 'Filament\\Http\\Middleware\\DispatchServingFilamentEvent',
        8 => 'Filament\\Http\\Middleware\\MirrorConfigToSubpackages',
      ),
    ),
  ),
  'filament-breezy' => 
  array (
    'enable_profile_page' => true,
    'show_profile_page_in_user_menu' => true,
    'show_profile_page_in_navbar' => false,
    'password_rules' => 
    array (
      0 => 'min:8',
    ),
    'user_model' => 'App\\Models\\User',
    'users_table' => 'users',
    'auth_card_max_w' => 'md',
    'enable_registration' => true,
    'fallback_login_field' => 'email',
    'registration_component_path' => 'JeffGreco13\\FilamentBreezy\\Http\\Livewire\\Auth\\Register',
    'password_reset_component_path' => 'JeffGreco13\\FilamentBreezy\\Http\\Livewire\\Auth\\ResetPassword',
    'email_verification_component_path' => 'JeffGreco13\\FilamentBreezy\\Http\\Livewire\\Auth\\Verify',
    'registration_redirect_url' => 'admin',
    'enable_sanctum' => false,
    'sanctum_permissions' => 
    array (
      0 => 'create',
      1 => 'read',
      2 => 'update',
      3 => 'delete',
    ),
  ),
  'filesystems' => 
  array (
    'default' => 'local',
    'disks' => 
    array (
      'local' => 
      array (
        'driver' => 'local',
        'root' => '/home/marwan/Sites/janagate/storage/app',
      ),
      'public' => 
      array (
        'driver' => 'local',
        'root' => '/home/marwan/Sites/janagate/storage/app/public',
        'url' => 'http://janagate.test/storage',
        'visibility' => 'public',
      ),
      's3' => 
      array (
        'driver' => 's3',
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
        'bucket' => '',
        'url' => NULL,
        'endpoint' => NULL,
        'use_path_style_endpoint' => false,
      ),
    ),
    'links' => 
    array (
      '/home/marwan/Sites/janagate/public/storage' => '/home/marwan/Sites/janagate/storage/app/public',
    ),
  ),
  'hashing' => 
  array (
    'driver' => 'bcrypt',
    'bcrypt' => 
    array (
      'rounds' => 10,
    ),
    'argon' => 
    array (
      'memory' => 65536,
      'threads' => 1,
      'time' => 4,
    ),
  ),
  'laravellocalization' => 
  array (
    'supportedLocales' => 
    array (
      'en' => 
      array (
        'name' => 'English',
        'script' => 'Latn',
        'native' => 'English',
        'regional' => 'en_GB',
      ),
      'ar' => 
      array (
        'name' => 'Arabic',
        'script' => 'Arab',
        'native' => 'العربية',
        'regional' => 'ar_AE',
      ),
    ),
    'useAcceptLanguageHeader' => true,
    'hideDefaultLocaleInURL' => false,
    'localesOrder' => 
    array (
    ),
    'localesMapping' => 
    array (
    ),
    'utf8suffix' => '.UTF-8',
    'urlsIgnored' => 
    array (
      0 => '/skipped',
    ),
    'httpMethodsIgnored' => 
    array (
      0 => 'POST',
      1 => 'PUT',
      2 => 'PATCH',
      3 => 'DELETE',
    ),
  ),
  'logging' => 
  array (
    'default' => 'stack',
    'deprecations' => NULL,
    'channels' => 
    array (
      'stack' => 
      array (
        'driver' => 'stack',
        'channels' => 
        array (
          0 => 'single',
        ),
        'ignore_exceptions' => false,
      ),
      'single' => 
      array (
        'driver' => 'single',
        'path' => '/home/marwan/Sites/janagate/storage/logs/laravel.log',
        'level' => 'debug',
      ),
      'daily' => 
      array (
        'driver' => 'daily',
        'path' => '/home/marwan/Sites/janagate/storage/logs/laravel.log',
        'level' => 'debug',
        'days' => 14,
      ),
      'slack' => 
      array (
        'driver' => 'slack',
        'url' => NULL,
        'username' => 'Laravel Log',
        'emoji' => ':boom:',
        'level' => 'debug',
      ),
      'papertrail' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\SyslogUdpHandler',
        'handler_with' => 
        array (
          'host' => NULL,
          'port' => NULL,
        ),
      ),
      'stderr' => 
      array (
        'driver' => 'monolog',
        'level' => 'debug',
        'handler' => 'Monolog\\Handler\\StreamHandler',
        'formatter' => NULL,
        'with' => 
        array (
          'stream' => 'php://stderr',
        ),
      ),
      'syslog' => 
      array (
        'driver' => 'syslog',
        'level' => 'debug',
      ),
      'errorlog' => 
      array (
        'driver' => 'errorlog',
        'level' => 'debug',
      ),
      'null' => 
      array (
        'driver' => 'monolog',
        'handler' => 'Monolog\\Handler\\NullHandler',
      ),
      'emergency' => 
      array (
        'path' => '/home/marwan/Sites/janagate/storage/logs/laravel.log',
      ),
    ),
  ),
  'mail' => 
  array (
    'default' => 'smtp',
    'mailers' => 
    array (
      'smtp' => 
      array (
        'transport' => 'smtp',
        'host' => '0.0.0.0',
        'port' => '1025',
        'encryption' => NULL,
        'username' => NULL,
        'password' => NULL,
        'timeout' => NULL,
        'auth_mode' => NULL,
      ),
      'ses' => 
      array (
        'transport' => 'ses',
      ),
      'mailgun' => 
      array (
        'transport' => 'mailgun',
      ),
      'postmark' => 
      array (
        'transport' => 'postmark',
      ),
      'sendmail' => 
      array (
        'transport' => 'sendmail',
        'path' => '/usr/sbin/sendmail -t -i',
      ),
      'log' => 
      array (
        'transport' => 'log',
        'channel' => NULL,
      ),
      'array' => 
      array (
        'transport' => 'array',
      ),
      'failover' => 
      array (
        'transport' => 'failover',
        'mailers' => 
        array (
          0 => 'smtp',
          1 => 'log',
        ),
      ),
    ),
    'from' => 
    array (
      'address' => 'hello@example.com',
      'name' => 'Laravel',
    ),
    'markdown' => 
    array (
      'theme' => 'default',
      'paths' => 
      array (
        0 => '/home/marwan/Sites/janagate/resources/views/vendor/mail',
      ),
    ),
  ),
  'media-library' => 
  array (
    'disk_name' => 'public',
    'max_file_size' => 10485760,
    'queue_name' => '',
    'queue_conversions_by_default' => true,
    'media_model' => 'Spatie\\MediaLibrary\\MediaCollections\\Models\\Media',
    'temporary_upload_model' => 'Spatie\\MediaLibraryPro\\Models\\TemporaryUpload',
    'enable_temporary_uploads_session_affinity' => true,
    'generate_thumbnails_for_temporary_uploads' => true,
    'file_namer' => 'Spatie\\MediaLibrary\\Support\\FileNamer\\DefaultFileNamer',
    'path_generator' => 'Spatie\\MediaLibrary\\Support\\PathGenerator\\DefaultPathGenerator',
    'url_generator' => 'Spatie\\MediaLibrary\\Support\\UrlGenerator\\DefaultUrlGenerator',
    'moves_media_on_update' => false,
    'version_urls' => false,
    'image_optimizers' => 
    array (
      'Spatie\\ImageOptimizer\\Optimizers\\Jpegoptim' => 
      array (
        0 => '-m85',
        1 => '--force',
        2 => '--strip-all',
        3 => '--all-progressive',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Pngquant' => 
      array (
        0 => '--force',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Optipng' => 
      array (
        0 => '-i0',
        1 => '-o2',
        2 => '-quiet',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Svgo' => 
      array (
        0 => '--disable=cleanupIDs',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Gifsicle' => 
      array (
        0 => '-b',
        1 => '-O3',
      ),
      'Spatie\\ImageOptimizer\\Optimizers\\Cwebp' => 
      array (
        0 => '-m 6',
        1 => '-pass 10',
        2 => '-mt',
        3 => '-q 90',
      ),
    ),
    'image_generators' => 
    array (
      0 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Image',
      1 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Webp',
      2 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Pdf',
      3 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Svg',
      4 => 'Spatie\\MediaLibrary\\Conversions\\ImageGenerators\\Video',
    ),
    'temporary_directory_path' => NULL,
    'image_driver' => 'gd',
    'ffmpeg_path' => '/usr/bin/ffmpeg',
    'ffprobe_path' => '/usr/bin/ffprobe',
    'jobs' => 
    array (
      'perform_conversions' => 'Spatie\\MediaLibrary\\Conversions\\Jobs\\PerformConversionsJob',
      'generate_responsive_images' => 'Spatie\\MediaLibrary\\ResponsiveImages\\Jobs\\GenerateResponsiveImagesJob',
    ),
    'media_downloader' => 'Spatie\\MediaLibrary\\Downloaders\\DefaultDownloader',
    'remote' => 
    array (
      'extra_headers' => 
      array (
        'CacheControl' => 'max-age=604800',
      ),
    ),
    'responsive_images' => 
    array (
      'width_calculator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\WidthCalculator\\FileSizeOptimizedWidthCalculator',
      'use_tiny_placeholders' => true,
      'tiny_placeholder_generator' => 'Spatie\\MediaLibrary\\ResponsiveImages\\TinyPlaceholderGenerator\\Blurred',
    ),
    'enable_vapor_uploads' => false,
    'default_loading_attribute_value' => NULL,
    'prefix' => '',
  ),
  'payment' => 
  array (
    'hyperpay' => 
    array (
      'url' => 'https://test.oppwa.com',
      'auth_key' => 'OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg=',
      'entity_id' => '8a8294174b7ecb28014b9699220015ca',
      'production' => false,
    ),
  ),
  'queue' => 
  array (
    'default' => 'sync',
    'connections' => 
    array (
      'sync' => 
      array (
        'driver' => 'sync',
      ),
      'database' => 
      array (
        'driver' => 'database',
        'table' => 'jobs',
        'queue' => 'default',
        'retry_after' => 90,
        'after_commit' => false,
      ),
      'beanstalkd' => 
      array (
        'driver' => 'beanstalkd',
        'host' => 'localhost',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => 0,
        'after_commit' => false,
      ),
      'sqs' => 
      array (
        'driver' => 'sqs',
        'key' => '',
        'secret' => '',
        'prefix' => 'https://sqs.us-east-1.amazonaws.com/your-account-id',
        'queue' => 'default',
        'suffix' => NULL,
        'region' => 'us-east-1',
        'after_commit' => false,
      ),
      'redis' => 
      array (
        'driver' => 'redis',
        'connection' => 'default',
        'queue' => 'default',
        'retry_after' => 90,
        'block_for' => NULL,
        'after_commit' => false,
      ),
    ),
    'failed' => 
    array (
      'driver' => 'database-uuids',
      'database' => 'mysql',
      'table' => 'failed_jobs',
    ),
  ),
  'sanctum' => 
  array (
    'stateful' => 
    array (
      0 => 'localhost',
      1 => 'localhost:3000',
      2 => '127.0.0.1',
      3 => '127.0.0.1:8000',
      4 => '::1',
      5 => 'janagate.test',
    ),
    'guard' => 
    array (
      0 => 'web',
    ),
    'expiration' => NULL,
    'middleware' => 
    array (
      'verify_csrf_token' => 'App\\Http\\Middleware\\VerifyCsrfToken',
      'encrypt_cookies' => 'App\\Http\\Middleware\\EncryptCookies',
    ),
  ),
  'services' => 
  array (
    'mailgun' => 
    array (
      'domain' => NULL,
      'secret' => NULL,
      'endpoint' => 'api.mailgun.net',
    ),
    'postmark' => 
    array (
      'token' => NULL,
    ),
    'ses' => 
    array (
      'key' => '',
      'secret' => '',
      'region' => 'us-east-1',
    ),
  ),
  'session' => 
  array (
    'driver' => 'file',
    'lifetime' => '120',
    'expire_on_close' => false,
    'encrypt' => false,
    'files' => '/home/marwan/Sites/janagate/storage/framework/sessions',
    'connection' => NULL,
    'table' => 'sessions',
    'store' => NULL,
    'lottery' => 
    array (
      0 => 2,
      1 => 100,
    ),
    'cookie' => 'laravel_session',
    'path' => '/',
    'domain' => NULL,
    'secure' => NULL,
    'http_only' => true,
    'same_site' => 'lax',
  ),
  'settings' => 
  array (
    'email' => 'ganagate@gmail.com',
  ),
  'view' => 
  array (
    'paths' => 
    array (
      0 => '/home/marwan/Sites/janagate/resources/views',
    ),
    'compiled' => '/home/marwan/Sites/janagate/storage/framework/views',
  ),
  'money' => 
  array (
    'AED' => 
    array (
      'name' => 'UAE Dirham',
      'code' => 784,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.إ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AFN' => 
    array (
      'name' => 'Afghani',
      'code' => 971,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '؋',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ALL' => 
    array (
      'name' => 'Lek',
      'code' => 8,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AMD' => 
    array (
      'name' => 'Armenian Dram',
      'code' => 51,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'դր.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ANG' => 
    array (
      'name' => 'Netherlands Antillean Guilder',
      'code' => 532,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'AOA' => 
    array (
      'name' => 'Kwanza',
      'code' => 973,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kz',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ARS' => 
    array (
      'name' => 'Argentine Peso',
      'code' => 32,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'AUD' => 
    array (
      'name' => 'Australian Dollar',
      'code' => 36,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ' ',
    ),
    'AWG' => 
    array (
      'name' => 'Aruban Florin',
      'code' => 533,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ƒ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'AZN' => 
    array (
      'name' => 'Azerbaijanian Manat',
      'code' => 944,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BAM' => 
    array (
      'name' => 'Convertible Mark',
      'code' => 977,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'КМ',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BBD' => 
    array (
      'name' => 'Barbados Dollar',
      'code' => 52,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BDT' => 
    array (
      'name' => 'Taka',
      'code' => 50,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '৳',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BGN' => 
    array (
      'name' => 'Bulgarian Lev',
      'code' => 975,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'лв',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BHD' => 
    array (
      'name' => 'Bahraini Dinar',
      'code' => 48,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ب.د',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BIF' => 
    array (
      'name' => 'Burundi Franc',
      'code' => 108,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BMD' => 
    array (
      'name' => 'Bermudian Dollar',
      'code' => 60,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BND' => 
    array (
      'name' => 'Brunei Dollar',
      'code' => 96,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOB' => 
    array (
      'name' => 'Boliviano',
      'code' => 68,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BOV' => 
    array (
      'name' => 'Mvdol',
      'code' => 984,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Real',
      'code' => 986,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'BSD' => 
    array (
      'name' => 'Bahamian Dollar',
      'code' => 44,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BTN' => 
    array (
      'name' => 'Ngultrum',
      'code' => 64,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nu.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BWP' => 
    array (
      'name' => 'Pula',
      'code' => 72,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'BYN' => 
    array (
      'name' => 'Belarussian Ruble',
      'code' => 974,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'BZD' => 
    array (
      'name' => 'Belize Dollar',
      'code' => 84,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollar',
      'code' => 124,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CDF' => 
    array (
      'name' => 'Congolese Franc',
      'code' => 976,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'code' => 756,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'CHF',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CLF' => 
    array (
      'name' => 'Unidades de fomento',
      'code' => 990,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'UF',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CLP' => 
    array (
      'name' => 'Chilean Peso',
      'code' => 152,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CNY' => 
    array (
      'name' => 'Yuan Renminbi',
      'code' => 156,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'COP' => 
    array (
      'name' => 'Colombian Peso',
      'code' => 170,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CRC' => 
    array (
      'name' => 'Costa Rican Colon',
      'code' => 188,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'CUC' => 
    array (
      'name' => 'Peso Convertible',
      'code' => 931,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CUP' => 
    array (
      'name' => 'Cuban Peso',
      'code' => 192,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CVE' => 
    array (
      'name' => 'Cape Verde Escudo',
      'code' => 132,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'CZK' => 
    array (
      'name' => 'Czech Koruna',
      'code' => 203,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Kč',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'DJF' => 
    array (
      'name' => 'Djibouti Franc',
      'code' => 262,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fdj',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DKK' => 
    array (
      'name' => 'Danish Krone',
      'code' => 208,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'DOP' => 
    array (
      'name' => 'Dominican Peso',
      'code' => 214,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'DZD' => 
    array (
      'name' => 'Algerian Dinar',
      'code' => 12,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.ج',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EGP' => 
    array (
      'name' => 'Egyptian Pound',
      'code' => 818,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ج.م',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ERN' => 
    array (
      'name' => 'Nakfa',
      'code' => 232,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Nfk',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ETB' => 
    array (
      'name' => 'Ethiopian Birr',
      'code' => 230,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Br',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'code' => 978,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '€',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'FJD' => 
    array (
      'name' => 'Fiji Dollar',
      'code' => 242,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'FKP' => 
    array (
      'name' => 'Falkland Islands Pound',
      'code' => 238,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GBP' => 
    array (
      'name' => 'Pound Sterling',
      'code' => 826,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GEL' => 
    array (
      'name' => 'Lari',
      'code' => 981,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ლ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GHS' => 
    array (
      'name' => 'Ghana Cedi',
      'code' => 936,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₵',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GIP' => 
    array (
      'name' => 'Gibraltar Pound',
      'code' => 292,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GMD' => 
    array (
      'name' => 'Dalasi',
      'code' => 270,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'D',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GNF' => 
    array (
      'name' => 'Guinea Franc',
      'code' => 324,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GTQ' => 
    array (
      'name' => 'Quetzal',
      'code' => 320,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Q',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'GYD' => 
    array (
      'name' => 'Guyana Dollar',
      'code' => 328,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollar',
      'code' => 344,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HNL' => 
    array (
      'name' => 'Lempira',
      'code' => 340,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HRK' => 
    array (
      'name' => 'Croatian Kuna',
      'code' => 191,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kn',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'HTG' => 
    array (
      'name' => 'Gourde',
      'code' => 332,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'G',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'HUF' => 
    array (
      'name' => 'Forint',
      'code' => 348,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ft',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'IDR' => 
    array (
      'name' => 'Rupiah',
      'code' => 360,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Rp',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'ILS' => 
    array (
      'name' => 'New Israeli Sheqel',
      'code' => 376,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₪',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupee',
      'code' => 356,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₹',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IQD' => 
    array (
      'name' => 'Iraqi Dinar',
      'code' => 368,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ع.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'IRR' => 
    array (
      'name' => 'Iranian Rial',
      'code' => 364,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ISK' => 
    array (
      'name' => 'Iceland Krona',
      'code' => 352,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'kr',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'JMD' => 
    array (
      'name' => 'Jamaican Dollar',
      'code' => 388,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JOD' => 
    array (
      'name' => 'Jordanian Dinar',
      'code' => 400,
      'precision' => 3,
      'subunit' => 100,
      'symbol' => 'د.ا',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'JPY' => 
    array (
      'name' => 'Yen',
      'code' => 392,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '¥',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KES' => 
    array (
      'name' => 'Kenyan Shilling',
      'code' => 404,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'KSh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KGS' => 
    array (
      'name' => 'Som',
      'code' => 417,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'som',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KHR' => 
    array (
      'name' => 'Riel',
      'code' => 116,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '៛',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KMF' => 
    array (
      'name' => 'Comoro Franc',
      'code' => 174,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KPW' => 
    array (
      'name' => 'North Korean Won',
      'code' => 408,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₩',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KRW' => 
    array (
      'name' => 'Won',
      'code' => 410,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₩',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KWD' => 
    array (
      'name' => 'Kuwaiti Dinar',
      'code' => 414,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ك',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KYD' => 
    array (
      'name' => 'Cayman Islands Dollar',
      'code' => 136,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'KZT' => 
    array (
      'name' => 'Tenge',
      'code' => 398,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '〒',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LAK' => 
    array (
      'name' => 'Kip',
      'code' => 418,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₭',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LBP' => 
    array (
      'name' => 'Lebanese Pound',
      'code' => 422,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ل.ل',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LKR' => 
    array (
      'name' => 'Sri Lanka Rupee',
      'code' => 144,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LRD' => 
    array (
      'name' => 'Liberian Dollar',
      'code' => 430,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LSL' => 
    array (
      'name' => 'Loti',
      'code' => 426,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LTL' => 
    array (
      'name' => 'Lithuanian Litas',
      'code' => 440,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lt',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LVL' => 
    array (
      'name' => 'Latvian Lats',
      'code' => 428,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Ls',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'LYD' => 
    array (
      'name' => 'Libyan Dinar',
      'code' => 434,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ل.د',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MAD' => 
    array (
      'name' => 'Moroccan Dirham',
      'code' => 504,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'د.م.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MDL' => 
    array (
      'name' => 'Moldovan Leu',
      'code' => 498,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'L',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MGA' => 
    array (
      'name' => 'Malagasy Ariary',
      'code' => 969,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'Ar',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MKD' => 
    array (
      'name' => 'Denar',
      'code' => 807,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ден',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MMK' => 
    array (
      'name' => 'Kyat',
      'code' => 104,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MNT' => 
    array (
      'name' => 'Tugrik',
      'code' => 496,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₮',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MOP' => 
    array (
      'name' => 'Pataca',
      'code' => 446,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'P',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MRO' => 
    array (
      'name' => 'Ouguiya',
      'code' => 478,
      'precision' => 2,
      'subunit' => 5,
      'symbol' => 'UM',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MUR' => 
    array (
      'name' => 'Mauritius Rupee',
      'code' => 480,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MVR' => 
    array (
      'name' => 'Rufiyaa',
      'code' => 462,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MVR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MWK' => 
    array (
      'name' => 'Kwacha',
      'code' => 454,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MXN' => 
    array (
      'name' => 'Mexican Peso',
      'code' => 484,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MYR' => 
    array (
      'name' => 'Malaysian Ringgit',
      'code' => 458,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'RM',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'MZN' => 
    array (
      'name' => 'Mozambique Metical',
      'code' => 943,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'MTn',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'NAD' => 
    array (
      'name' => 'Namibia Dollar',
      'code' => 516,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NGN' => 
    array (
      'name' => 'Naira',
      'code' => 566,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₦',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NIO' => 
    array (
      'name' => 'Cordoba Oro',
      'code' => 558,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'C$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NOK' => 
    array (
      'name' => 'Norwegian Krone',
      'code' => 578,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'NPR' => 
    array (
      'name' => 'Nepalese Rupee',
      'code' => 524,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'NZD' => 
    array (
      'name' => 'New Zealand Dollar',
      'code' => 554,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'OMR' => 
    array (
      'name' => 'Rial Omani',
      'code' => 512,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'ر.ع.',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PAB' => 
    array (
      'name' => 'Balboa',
      'code' => 590,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'B/.',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PEN' => 
    array (
      'name' => 'Sol',
      'code' => 604,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'S/',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PGK' => 
    array (
      'name' => 'Kina',
      'code' => 598,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'K',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PHP' => 
    array (
      'name' => 'Philippine Peso',
      'code' => 608,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₱',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PKR' => 
    array (
      'name' => 'Pakistan Rupee',
      'code' => 586,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'PLN' => 
    array (
      'name' => 'Zloty',
      'code' => 985,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'zł',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'PYG' => 
    array (
      'name' => 'Guarani',
      'code' => 600,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₲',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'QAR' => 
    array (
      'name' => 'Qatari Rial',
      'code' => 634,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.ق',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RON' => 
    array (
      'name' => 'New Romanian Leu',
      'code' => 946,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Lei',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'RSD' => 
    array (
      'name' => 'Serbian Dinar',
      'code' => 941,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'РСД',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'RUB' => 
    array (
      'name' => 'Russian Ruble',
      'code' => 643,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₽',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'RWF' => 
    array (
      'name' => 'Rwanda Franc',
      'code' => 646,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'FRw',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SAR' => 
    array (
      'name' => 'Saudi Riyal',
      'code' => 682,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ر.س',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SBD' => 
    array (
      'name' => 'Solomon Islands Dollar',
      'code' => 90,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SCR' => 
    array (
      'name' => 'Seychelles Rupee',
      'code' => 690,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₨',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SDG' => 
    array (
      'name' => 'Sudanese Pound',
      'code' => 938,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SEK' => 
    array (
      'name' => 'Swedish Krona',
      'code' => 752,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'kr',
      'symbol_first' => false,
      'decimal_mark' => ',',
      'thousands_separator' => ' ',
    ),
    'SGD' => 
    array (
      'name' => 'Singapore Dollar',
      'code' => 702,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SHP' => 
    array (
      'name' => 'Saint Helena Pound',
      'code' => 654,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SLL' => 
    array (
      'name' => 'Leone',
      'code' => 694,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Le',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SOS' => 
    array (
      'name' => 'Somali Shilling',
      'code' => 706,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SRD' => 
    array (
      'name' => 'Surinam Dollar',
      'code' => 968,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SSP' => 
    array (
      'name' => 'South Sudanese Pound',
      'code' => 728,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'STD' => 
    array (
      'name' => 'Dobra',
      'code' => 678,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Db',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SVC' => 
    array (
      'name' => 'El Salvador Colon',
      'code' => 222,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₡',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SYP' => 
    array (
      'name' => 'Syrian Pound',
      'code' => 760,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '£S',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'SZL' => 
    array (
      'name' => 'Lilangeni',
      'code' => 748,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'E',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'THB' => 
    array (
      'name' => 'Baht',
      'code' => 764,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '฿',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TJS' => 
    array (
      'name' => 'Somoni',
      'code' => 972,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ЅМ',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TMT' => 
    array (
      'name' => 'Turkmenistan New Manat',
      'code' => 934,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TND' => 
    array (
      'name' => 'Tunisian Dinar',
      'code' => 788,
      'precision' => 3,
      'subunit' => 1000,
      'symbol' => 'د.ت',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TOP' => 
    array (
      'name' => 'Pa’anga',
      'code' => 776,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TRY' => 
    array (
      'name' => 'Turkish Lira',
      'code' => 949,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₺',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'TTD' => 
    array (
      'name' => 'Trinidad and Tobago Dollar',
      'code' => 780,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TWD' => 
    array (
      'name' => 'New Taiwan Dollar',
      'code' => 901,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'TZS' => 
    array (
      'name' => 'Tanzanian Shilling',
      'code' => 834,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Sh',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UAH' => 
    array (
      'name' => 'Hryvnia',
      'code' => 980,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '₴',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UGX' => 
    array (
      'name' => 'Uganda Shilling',
      'code' => 800,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'USh',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'USD' => 
    array (
      'name' => 'US Dollar',
      'code' => 840,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'UYU' => 
    array (
      'name' => 'Peso Uruguayo',
      'code' => 858,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'UZS' => 
    array (
      'name' => 'Uzbekistan Sum',
      'code' => 860,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'лв',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'VEF' => 
    array (
      'name' => 'Bolivar',
      'code' => 937,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'Bs F',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'VND' => 
    array (
      'name' => 'Dong',
      'code' => 704,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => '₫',
      'symbol_first' => true,
      'decimal_mark' => ',',
      'thousands_separator' => '.',
    ),
    'VUV' => 
    array (
      'name' => 'Vatu',
      'code' => 548,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Vt',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'WST' => 
    array (
      'name' => 'Tala',
      'code' => 882,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'T',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAF' => 
    array (
      'name' => 'CFA Franc BEAC',
      'code' => 950,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAG' => 
    array (
      'name' => 'Silver',
      'code' => 961,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XAU' => 
    array (
      'name' => 'Gold',
      'code' => 959,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'oz t',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XCD' => 
    array (
      'name' => 'East Caribbean Dollar',
      'code' => 951,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XDR' => 
    array (
      'name' => 'SDR (Special Drawing Right)',
      'code' => 960,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'SDR',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XOF' => 
    array (
      'name' => 'CFA Franc BCEAO',
      'code' => 952,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'XPF' => 
    array (
      'name' => 'CFP Franc',
      'code' => 953,
      'precision' => 0,
      'subunit' => 1,
      'symbol' => 'Fr',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'YER' => 
    array (
      'name' => 'Yemeni Rial',
      'code' => 886,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '﷼',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZAR' => 
    array (
      'name' => 'Rand',
      'code' => 710,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'R',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZMW' => 
    array (
      'name' => 'Zambian Kwacha',
      'code' => 967,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => 'ZK',
      'symbol_first' => false,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
    'ZWL' => 
    array (
      'name' => 'Zimbabwe Dollar',
      'code' => 932,
      'precision' => 2,
      'subunit' => 100,
      'symbol' => '$',
      'symbol_first' => true,
      'decimal_mark' => '.',
      'thousands_separator' => ',',
    ),
  ),
  'blade-heroicons' => 
  array (
    'prefix' => 'heroicon',
    'fallback' => '',
    'class' => '',
    'attributes' => 
    array (
    ),
  ),
  'blade-icons' => 
  array (
    'sets' => 
    array (
    ),
    'class' => '',
    'attributes' => 
    array (
    ),
    'fallback' => '',
    'components' => 
    array (
      'disabled' => false,
      'default' => 'icon',
    ),
  ),
  'flare' => 
  array (
    'key' => NULL,
    'reporting' => 
    array (
      'anonymize_ips' => true,
      'collect_git_information' => false,
      'report_queries' => true,
      'maximum_number_of_collected_queries' => 200,
      'report_query_bindings' => true,
      'report_view_data' => true,
      'grouping_type' => NULL,
      'report_logs' => true,
      'maximum_number_of_collected_logs' => 200,
      'censor_request_body_fields' => 
      array (
        0 => 'password',
      ),
    ),
    'send_logs_as_events' => true,
    'censor_request_body_fields' => 
    array (
      0 => 'password',
    ),
  ),
  'ignition' => 
  array (
    'editor' => 'phpstorm',
    'theme' => 'light',
    'enable_share_button' => true,
    'register_commands' => false,
    'ignored_solution_providers' => 
    array (
      0 => 'Facade\\Ignition\\SolutionProviders\\MissingPackageSolutionProvider',
    ),
    'enable_runnable_solutions' => NULL,
    'remote_sites_path' => '',
    'local_sites_path' => '',
    'housekeeping_endpoint_prefix' => '_ignition',
  ),
  'forms' => 
  array (
    'components' => 
    array (
      'date_time_picker' => 
      array (
        'first_day_of_week' => 1,
      ),
    ),
    'default_filesystem_disk' => 'public',
    'dark_mode' => false,
  ),
  'tables' => 
  array (
    'date_format' => 'M j, Y',
    'date_time_format' => 'M j, Y H:i:s',
    'time_format' => 'H:i:s',
    'default_filesystem_disk' => 'public',
    'dark_mode' => false,
    'layout' => 
    array (
      'action_alignment' => 'right',
    ),
  ),
  'image' => 
  array (
    'driver' => 'gd',
  ),
  'livewire' => 
  array (
    'class_namespace' => 'App\\Http\\Livewire',
    'view_path' => '/home/marwan/Sites/janagate/resources/views/livewire',
    'layout' => 'layouts.app',
    'asset_url' => NULL,
    'app_url' => NULL,
    'middleware_group' => 'web',
    'temporary_file_upload' => 
    array (
      'disk' => NULL,
      'rules' => NULL,
      'directory' => NULL,
      'middleware' => NULL,
      'preview_mimes' => 
      array (
        0 => 'png',
        1 => 'gif',
        2 => 'bmp',
        3 => 'svg',
        4 => 'wav',
        5 => 'mp4',
        6 => 'mov',
        7 => 'avi',
        8 => 'wmv',
        9 => 'mp3',
        10 => 'm4a',
        11 => 'jpg',
        12 => 'jpeg',
        13 => 'mpga',
        14 => 'webp',
        15 => 'wma',
      ),
      'max_upload_time' => 5,
    ),
    'manifest_path' => NULL,
    'back_button_cache' => false,
    'render_on_redirect' => false,
  ),
  'tinker' => 
  array (
    'commands' => 
    array (
    ),
    'alias' => 
    array (
    ),
    'dont_alias' => 
    array (
      0 => 'App\\Nova',
    ),
  ),
);
