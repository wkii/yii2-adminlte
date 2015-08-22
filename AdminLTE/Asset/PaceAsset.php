<?php
/**
 * Pace Assets
 */
namespace Wkii\AdminLTE\Asset;


class PaceAsset extends \Yii\web\AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/pace';

    /**
     * @inherit
     */
    public $css = [
        'themes/red/pace-theme-flash.css',
    ];

    // public $jsOptions = ["data-pace-options" => ["ajax" => false]];

    public $js = [
        'pace.min.js'
    ];
}