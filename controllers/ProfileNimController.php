<?php

namespace app\controllers;
use app\models\ProfileNim;
use yii\data\ActiveDataProvider;

class ProfileNimController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = ProfileNim::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
