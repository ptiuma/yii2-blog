<?php

namespace pendalf89\blog\assets;

use yii\web\AssetBundle;

/**
 * This declares the asset files required by translit script.
 *
 * @author Zabolotskikh Boris <zabolotskich@bk.ru>
 */
class TranslitAsset extends AssetBundle
{
    public $sourcePath = '@vendor/pendalf89/yii2-blog/assets/source/js';
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public function init()
    {
        parent::init();

        $this->js = [
            YII_ENV_PROD ? 'translit.js' : 'translit.min.js',
        ];
    }
}
