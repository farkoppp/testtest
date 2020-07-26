<?php

namespace app\controllers;

use app\models\Ord;
use Yii;
use app\models\Service;
use app\models\Addservice;
use app\models\Rel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class OrderController extends Controller {

    public function actionIndex() {
        return $this->render('index',[
            
        ]);
    }

    public function actionCreate() {
        $ord = new Ord();



        if ($ord->load(Yii::$app->request->post())) {
            $ord->createdate = date('Y:m:d');
            $ord->username = Yii::$app->user->identity->username;
            $ord->save();
            
            if ($_POST['Ord']['dop']) {

                foreach ($_POST['Ord']['dop'] as $i) {
                    $rel = new Rel();
                    $rel->ordid = $ord->id;
                    $rel->addserviceid = $i;
                    $rel->reldate = $ord->createdate;
                    $rel->save();
                }
            }
            return $this->render('index');
        }

        return $this->render('create', [
                    'ord' => $ord,
        ]);
    }

}
