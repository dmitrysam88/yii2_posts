<?php
/**
 * Created by PhpStorm.
 * User: Dima
 * Date: 11.11.2017
 * Time: 15:05
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;

class PostController extends Controller
{
    public function actionIndex(){
        $model = Post::find()->all();
        return $this->render('index',[
            'model' => $model
        ]);
    }
}