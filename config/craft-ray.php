<?php

use craft\helpers\App;

return [
    'enable' => App::parseBooleanEnv('$RAY_ENABLED'),
];
