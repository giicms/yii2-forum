<?php

namespace giicms\forum\controllers;

use yii\web\Controller;
use yii\data\ActiveDataProvider;
use giicms\forum\models\Post;
use giicms\forum\controllers\FrontendController;

class DefaultController extends FrontendController
{

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find()->orderBy('id DESC'),
            'pagination' => [
                'pageSize' => 10,
            ],
        ]);

        $this->view->title = 'Forum';
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

}
