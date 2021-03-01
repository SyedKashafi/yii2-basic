<?php

namespace app\controllers;

class PartsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data= "this is data";
        $data2= "test data";

        $array =[

            'hello'=$data;
            'halu'=$data2;
        ]

        return $this->render('index');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

}
