<?php

namespace giicms\forum\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{

    public function actionIndex()
    {

        // Redirects to the blogpost controller.
        return $this->render('index');
    }

}
