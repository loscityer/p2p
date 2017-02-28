<?php

namespace app\modules\controllers;

class IndexController extends \yii\web\Controller
{
    
      public $layout=false;
    public function actionIndex()
    {
         
        return $this->render('index');  
    }

    public function actionRight()
    {
       
        return $this->render('right');
    }

    public function actionLeft()
    {
         
        return $this->render('left'); 
    }

    public function actionTop()
    {
         
        return $this->render('top');
    }


}
