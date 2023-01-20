<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return GeneralConfig::create()
    ->enableGql(false)
    ->defaultWeekStartDay(1)
    ->useEmailAsUsername(true)
    ->omitScriptNameInUrls(true)
    ->cpTrigger(App::env('CP_TRIGGER'))
    ->securityKey(App::env('SECURITY_KEY'))
    ->devMode(App::parseBooleanEnv('$DEV_MODE'))
    ->allowUpdates(App::parseBooleanEnv('$ALLOW_UPDATES'))
    ->disallowRobots(App::parseBooleanEnv('$DISALLOW_ROBOTS'))
    ->allowAdminChanges(App::parseBooleanEnv('$ALLOW_ADMIN_CHANGES'))
    ->userSessionDuration(DateInterval::createFromDateString('7 days'))
    ->runQueueAutomatically(App::parseBooleanEnv('$RUN_QUEUE_AUTOMATICALLY') ?? true)
    ->aliases([
        '@web' => App::env('PRIMARY_SITE_URL'),
        '@webroot' => dirname(__DIR__).'/web',
        '@images' => dirname(__DIR__).'/web/images',
    ]);
