<?php
namespace app\assets;
use yii\web\AssetBundle;
class NewsAsset extends AssetBundle{
	public $basePath = "@webroot";
	public $baseUrl = "@web";
	public $css = [
		'css/block.css',
		'css/ie6.css',
		'css/style.css',
	];
	public $js = [
		'scripts/suckerfish.js',
	];
	public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap4\BootstrapAsset',
    ];
}


?>