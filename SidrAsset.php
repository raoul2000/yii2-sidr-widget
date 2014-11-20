<?php
namespace raoul2000\widget\sidr;

use yii\web\AssetBundle;

/**
 * @author Raoul <raoul.boulard@gmail.com>
 */
class SidrAsset extends AssetBundle
{
	const THEME_DARK = 'dark';
	const THEME_LIGHT = 'light';

	/**
	 * @var string name of the built-in theme to use. The theme name is used to create the CSS filename
	 * that will be published. By default, no theme is used.
	 */
	static public $theme = null;

	public $js = [
		'jquery.sidr.min.js'
	];
	public $depends = [
		'yii\web\JqueryAsset'
	];
	/**
	 * @see \yii\web\AssetBundle::init()
	 */
	public function init()
	{
		$this->sourcePath = __DIR__.'/assets';
		if( self::$theme != null) {
			$this->css = [
				'stylesheets/jquery.sidr.'.self::$theme.'.css'
			];
		}
		return parent::init();
	}
}
