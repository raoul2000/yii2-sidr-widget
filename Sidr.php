<?php
namespace raoul2000\widget\sidr;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use raoul2000\widget\sidr\SidrAsset;

/**
 * Sidr is a wrapper for the [Sidr jQuery plugin](https://github.com/artberri/sidr/).
 *
 * @author Raoul
 */
class Sidr extends Widget
{

	/**
	 * @var string JQuery selector to attach the maxlength widget to.
	 */
	public $selector;

	/**
	 * @var array plugin options
	 */
	public $pluginOptions = [];

	/**
	 * Checks that a value is provided for the "selector" attribute.
	 * @see \yii\base\Object::init()
	 */
	public function init()
	{
		parent::init();
		if (empty($this->selector)) {
			throw new InvalidConfigException('The "selector" property must be set.');
		}
	}

	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	/**
	 * Generates and registers javascript to start the plugin.
	 */
	public function registerClientScript()
	{
		$view = $this->getView();
		SidrAsset::register($view);

		$options = empty($this->pluginOptions) ? "{}" : Json::encode($this->pluginOptions);
		$js = "jQuery(\"{$this->selector}\").sidr(" . $options . ")";
		$view->registerJs($js);
	}
}
