<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/3 0003
 * Time: 下午 2:27
 */
namespace app\controllers;
use yii;
use app\models\PythonJobs;
use yii\web\Controller;

class PythonController extends Controller{
    public function actionIndex(){
        $PythonJobs = new PythonJobs();
        $CityList = $PythonJobs::findBySql("select city from python group by city")->asArray()->all();
        $PythonList = [];
        foreach ($CityList as $city){
            $PythonList[$city['city']]['count']= $PythonJobs::find()->where(['city' => $city['city']])->count();
            $PythonList[$city['city']]['jobs'] = $PythonJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($PythonList);
    }
}