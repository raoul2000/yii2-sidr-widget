yii2-sidr-widget
==========================
The **Sidr widget** is a wrapper around the [Sidr jQuery plugin](http://www.berriart.com/sidr/), 
for creating side menus and "*the easiest way for doing your menu responsive*".

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-sidr-widget "*"
```

or add

```
"raoul2000/yii2-sidr-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----
Using Sidr widget is easy. For example :

```php
<?php
use raoul2000\widget\sidr\SidrAsset;
use raoul2000\widget\sidr\Sidr;

// The Sidr plugin comes with 2 built-in theme : 'dark' and 'light'
// In this example we will use the light theme

SidrAsset::$theme = SidrAsset::THEME_LIGHT;
?>

<!-- This button will open/close the side menu -->
<button id="open-menu">open/close Menu</button>

<!-- This is the menu header and content -->
<header id="demoheader">
	<h1>Demos &amp; Usage</h1>
</header>

<div id="demo-content">
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit.
		 Quasi nihil ab possimus temporibus 
		illum ullam molestiae aliquam maiores .
	</p>
</div>

<!-- include the Sidr Widget -->
<?= Sidr::widget([
	'selector' => '#open-menu',
	'pluginOptions' => [
		'name' =>  'sidr-menu',
		'source' => '#demoheader, #demo-content',
		'onClose' => new yii\web\JsExpression('
			function() {
				alert("bye bye side menu !");
			}
		')
	]
]); ?>
```

For more information on the plugin options, please refer to [Sidr github page](https://github.com/artberri/sidr/).

Alternative
----------
- [yii2-jpanelmenu-widget](https://github.com/raoul2000/yii2-jpanelmenu-widget)



License
-------

**yii2-sidr-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
