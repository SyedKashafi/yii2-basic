<?php

namespace app\controllers;

class PartsController extends \yii\web\Controller
{
    // public function actionIndex()
    // {
    //     //data amik dari database
    //     $data= "This is data";
    //     $data2= "test data";

    //     $array [

    //         'hello' =$data,
    //         'haluu' =$data2 ];

    //     print_r($array)

    //     //$part = new Parts;
    //     //$part-> name "D20N";

    //  return $this->render('index', compact ('data', 'data2') );
    // }

    public function actionAbout()
    {
        return $this->render('about');
    }

}
