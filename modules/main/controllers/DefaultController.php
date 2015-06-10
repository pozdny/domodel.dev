<?php

namespace app\modules\main\controllers;

use app\components\BaseController;

class DefaultController extends BaseController
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        //echo '<pre>'; print_r($this); echo '</pre>';
        return $this->render('index.twig');
    }
}
