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
use app\models\JavaJobs;
use app\models\CPlusJobs;
use app\models\HypertextPreprocessorJobs;
use yii\web\Controller;
use app\models\IosJobs;
use app\models\WebJobs;
use app\models\BigDataJobs;
use app\models\DataMiningJobs;
use app\models\ProgramManagerJobs;
use app\models\MlJobs;
class MainController extends Controller{
    public function actionJava(){
        $JavaJobs = new JavaJobs();
        $CityList = $JavaJobs::findBySql("select city from java group by city")->asArray()->all();
        $JavaList = [];
        foreach ($CityList as $city){
            $JavaList[$city['city']]['count']= $JavaJobs::find()->where(['city' => $city['city']])->count();
            $JavaList[$city['city']]['jobs'] = $JavaJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($JavaList);
    }
    public function actionPython(){
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
    public function actionCPlus(){
        $CPlusJobs = new CPlusJobs();
        $CityList = $CPlusJobs::findBySql("select city from c_plus group by city")->asArray()->all();
        $CPlusList = [];
        foreach ($CityList as $city){
            $CPlusList[$city['city']]['count']= $CPlusJobs::find()->where(['city' => $city['city']])->count();
            $CPlusList[$city['city']]['jobs'] = $CPlusJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($CPlusList);
    }
    public function actionPhp(){
        $PhpJobs = new HypertextPreprocessorJobs();
        $CityList = $PhpJobs::findBySql("select city from php group by city")->asArray()->all();
        $PhpList = [];
        foreach ($CityList as $city){
            $PhpList[$city['city']]['count']= $PhpJobs::find()->where(['city' => $city['city']])->count();
            $PhpList[$city['city']]['jobs'] = $PhpJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($PhpList);
    }
    public function actionIos(){
        $IosJobs = new IosJobs();
        $CityList = $IosJobs::findBySql("select city from ios group by city")->asArray()->all();
        $IosList = [];
        foreach ($CityList as $city){
            $IosList[$city['city']]['count']= $IosJobs::find()->where(['city' => $city['city']])->count();
            $IosList[$city['city']]['jobs'] = $IosJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($IosList);
    }
    public function actionWeb(){
        $WebJobs = new WebJobs();
        $CityList = $WebJobs::findBySql("select city from web group by city")->asArray()->all();
        $WebList = [];
        foreach ($CityList as $city){
            $WebList[$city['city']]['count']= $WebJobs::find()->where(['city' => $city['city']])->count();
            $WebList[$city['city']]['jobs'] = $WebJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($WebList);
    }
    public function actionBigData(){
        $BigDataJobs = new BigDataJobs();
        $CityList = $BigDataJobs::findBySql("select city from big_data group by city")->asArray()->all();
        $BigDataList = [];
        foreach ($CityList as $city){
            $BigDataList[$city['city']]['count']= $BigDataJobs::find()->where(['city' => $city['city']])->count();
            $BigDataList[$city['city']]['jobs'] = $BigDataJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($BigDataList);
    }
    public function actionDataMining(){
        $DataMiningJobs = new DataMiningJobs();
        $CityList = $DataMiningJobs::findBySql("select city from data_mining group by city")->asArray()->all();
        $DataMiningList = [];
        foreach ($CityList as $city){
            $DataMiningList[$city['city']]['count']= $DataMiningJobs::find()->where(['city' => $city['city']])->count();
            $DataMiningList[$city['city']]['jobs'] = $DataMiningJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($DataMiningList);
    }
    public function actionProgramManager(){
        $ProgramManagerJobs = new ProgramManagerJobs();
        $CityList = $ProgramManagerJobs::findBySql("select city from program_manager group by city")->asArray()->all();
        $ProgramManagerList = [];
        foreach ($CityList as $city){
            $ProgramManagerList[$city['city']]['count']= $ProgramManagerJobs::find()->where(['city' => $city['city']])->count();
            $ProgramManagerList[$city['city']]['jobs'] = $ProgramManagerJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($ProgramManagerList);
    }
    public function actionMl(){
        $MlJobs = new MlJobs();
        $CityList = $MlJobs::findBySql("select city from m_l group by city")->asArray()->all();
        $MlList = [];
        foreach ($CityList as $city){
            $MlList[$city['city']]['count']= $MlJobs::find()->where(['city' => $city['city']])->count();
            $MlList[$city['city']]['jobs'] = $MlJobs::find()->where(['city' => $city['city']])->asArray()->all();
        }
        header('Access-Control-Allow-Origin: *');
        return json_encode($MlList);
    }
}