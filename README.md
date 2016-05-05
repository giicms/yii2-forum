yii2-forum
=================

Forum

## Installation

The preferred way to install this extension is through composer.

Either run

```
php composer.phar require "giicms/yii2-forum" "dev-master"
```
or add

```json
"giicms/yii2-forum": "dev-master"
```

to the require section of your application's `composer.json` file.

## Usage Example
~~~php

 'modules' => [
        'forum' => [
            'class' => 'giicms\forum\Module',
        ],
  ],
~~~
