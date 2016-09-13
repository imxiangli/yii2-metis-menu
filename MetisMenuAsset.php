<?php

namespace imxiangli\metismenu;

use yii\web\AssetBundle;

class MetisMenuAsset extends AssetBundle
{
	public $sourcePath = '@vendor/bower/metisMenu/dist';
	public $js = [
		'metisMenu.js'
	];
	public $depends = [
		'yii\web\JqueryAsset'
	];
}