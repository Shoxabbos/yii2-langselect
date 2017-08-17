Langugae selector
=================
Langugae selector

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shoxabbos/yii2-langselect "*"
```

or add

```
"shoxabbos/yii2-langselect": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Add this Bootstrap Class to your web/config.php file:

```php
'bootstrap' => [
    [
        'class' => '\shoxabbos\langselect\LanguageSelector',
        'supportedLanguages' => ['en', 'ru'],
    ],
],
```

To change the language of the site, You need to call URL with a "lang" parameter: 
```php
http://localhost/site/index?lang=en
http://localhost/site/index?lang=ru
```