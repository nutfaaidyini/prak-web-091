<?php

namespace app\controllers;
use app\models\Pemilikbengkel;
use yii\data\ActiveDataProvider;

class PemilikbengkelController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Pemilikbengkel::find();
        $dataProvider = new ActiveDataProvider(['query' => $query]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $pemilikbengkel = new Pemilikbengkel;
        $pemilikbengkel->id = '10'.md5(microtime());
        $pemilikbengkel->username = 'dyini';
        $pemilikbengkel->name = 'Dyini_Nutfa';
        $pemilikbengkel->tgl_lahir = '2003-01-05';
        $pemilikbengkel->no_telp = '0851234567';
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            var_dump($pemilikbengkel->getErrors());
            die();
        }
    }

    public function actionUpdate($id)
    {
        $pemilikbengkel = Pemilikbengkel::findOne($id);
        $pemilikbengkel->no_telp = '083456789';
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            var_dump($pemilikbengkel->getErrors());
            die();
        }
    }

    public function actionDelete($id)
    {
        $pemilikbengkel = Pemilikbengkel::findOne($id);
        if ($pemilikbengkel->save()){
            return $this->redirect(['index']);
        }
        else {
            var_dump($pemilikbengkel->getErrors());
            die();
        }
    }

    public function actionView($id)
    {
        $pemilikbengkel = Pemilikbengkel::findOne(['id' => $id]);
        return $this->render('view', ['model' => $pemilikbengkel]);
    }

}
    

