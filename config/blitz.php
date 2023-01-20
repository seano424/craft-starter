<?php

use craft\helpers\App;

return [
    '*' => [
        // With this setting enabled, Blitz will log detailed messages to `storage/logs/blitz.log`.
        'debug' => App::parseBooleanEnv('$BLITZ_DEBUG'),

        // Only show Blitz hints when the site is in debug mode.
        'hintsEnabled' => App::parseBooleanEnv('$DEV_MODE'),

        // With this setting enabled, Blitz will begin caching pages according to the included/excluded URI patterns. Disable this setting to prevent Blitz from caching any new pages.
        'cachingEnabled' => App::parseBooleanEnv('$BLITZ_ENABLED'),

        // The URI patterns to include in caching. Set `siteId` to a blank string to indicate all sites.
        'includedUriPatterns' => [
            ['uriPattern' => ''],
            ['uriPattern' => '.*'],
        ],

        // The URI patterns to exclude from caching (overrides any matching patterns to include). Set `siteId` to a blank string to indicate all sites.
        'excludedUriPatterns' => [
            ['uriPattern' => '^dev'],
        ],

        // The storage type to use.
        'cacheStorageType' => 'putyourlightson\blitz\drivers\storage\FileStorage',

        // The storage settings.
        'cacheStorageSettings' => [
            'folderPath' => '@webroot/cache/blitz',
            'createGzipFiles' => true,
            'countCachedFiles' => true,
        ],

        // Whether the cache should automatically be warmed after clearing.
        'warmCacheAutomatically' => false,

        // Whether URLs with query strings should cached and how.
        // - `0`: Do not cache URLs with query strings
        // - `1`: Cache URLs with query strings as unique pages
        // - `2`: Cache URLs with query strings as the same page
        'queryStringCaching' => 1,
    ],
];
