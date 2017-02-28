<?php

namespace app\controllers;

class IndexController extends \yii\web\Controller
{
   
   
   public function actionIndex()
    {
        $this->layout='layout';
        return $this->render('index');
    }
    
}
