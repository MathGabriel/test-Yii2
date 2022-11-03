<?php

namespace app\controllers;

use yii\web\Controller;

class HelloController extends Controller
{
    public function actionSaySomething($message='HELLOU')
    {
        return $this->render('say-something', [
            'message'=> $message
        ]);
    }
}