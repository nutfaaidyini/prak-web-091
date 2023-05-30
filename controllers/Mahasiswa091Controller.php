<?php
namespace app\controllers;
use app\models\Mahasiswa091;
use yii\data\ActiveDataProvider;
use Yii;

class Mahasiswa091Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa091::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa091 = new Mahasiswa091;
        $mahasiswa091->nim091 = '60200121091-'.rand(10,99);
        $mahasiswa091->nama091 = 'Nutfa Aidyini';
        $mahasiswa091->kelas091 = 'A';
        $mahasiswa091->status091 = 'Baru';
        if ($mahasiswa091->save()){
            Yii::$app->session->setFlash('succes', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mahasiswa091 = Mahasiswa091::findOne($id);
        if($mahasiswa091!== null){
            $mahasiswa091->kelas091 = 'C';
            $mahasiswa091->status091 = 'Update';
            $mahasiswa091->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }
       

    public function actionDelete($id)
    {
        $mahasiswa091 = Mahasiswa091::findOne($id);
        if ($mahasiswa091->delete()){
            return $this->redirect(['index']);
        }
        else {
            var_dump($mahasiswa091->getErrors());
            die();
        }
    }

    public function actionView($id)
    {
        $mahasiswa091 = Mahasiswa091::findOne($id);
        return $this->render('view', ['mahasiswa091' => $mahasiswa091]);
    }

}
    

