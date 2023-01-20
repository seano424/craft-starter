<?php

namespace modules\guide\assetbundles;

use craft\web\AssetBundle;

/**
 * Guide asset bundle
 */
class GuideAsset extends AssetBundle
{
    public $sourcePath = __DIR__.'/dist/';

    public $depends = [];

    public $js = [];

    public $css = ['main.bundle.css'];
}
