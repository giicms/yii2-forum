<?php

namespace giicms\forum\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use giicms\category\controllers\AdminController;

/**
 * CategoriesController implements the CRUD actions for Category model.
 */
class CategoriesController extends AdminController
{

    public function getType()
    {
        return 'forum';
    }

}
