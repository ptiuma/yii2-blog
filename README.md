yii2-blog
=========

Yii2 blog module
Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pendalf89/yii2-blog "*"
```

or add

```
"pendalf89/yii2-blog": "*"
```

to the require section of your `composer.json` file.

Apply migration
```sh
yii migrate --migrationPath=vendor/pendalf89/yii2-blog/migrations
```

Configuration:

```php
'modules' => [
    'blog' => [
        'class' => 'pendalf89\blog\Module',
        'autoTranslit' => true, // This option automatically translit entered titles from russian symbols to english on fly. Default false;
        'editorOptions' => [], // Some options for CKEditor. Default custom options.
    ],
],
```

Don't forget configure MihailDev/yii2-elfinder[composer](https://github.com/MihailDev/yii2-elfinder) extension.