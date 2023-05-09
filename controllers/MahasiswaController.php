<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionProfil()
    {
        return $this->render('profil');
    }

    public function actionBatalKrs($id)
    {
        return "<h1>HEHEHE ID" . $id . "</h1>";
    }

}
