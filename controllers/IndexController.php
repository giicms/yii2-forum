<?php

namespace giicms\forum\controllers;

use yii\web\Controller;
use giicms\forum\models\Post;

/**
 * Create controller for the `forum` module
 */
class IndexController extends Controller
{

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $model = Post::find()->all();
        return $this->render('index', ['model' => $model]);
    }

}
