<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/23 0023
 * Time: 下午 4:21
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
/*todo: 统计各个城市每个职业所占比例*/
class AreaController extends Controller{
    protected function cityList(){
        return ['北京', '上海', '广州', '深圳', '成都', '武汉', '杭州', '南京', '西安'];
    }
    public function actionIndex(){
        $area = Yii::$app->request->get('area');
        if (!in_array($area,$this->cityList())){
           return json_encode('没有您查到的城市记录');
        }
        $resList['content']['Java'] = JavaJobs::find()->where(['city'=>$area])->count();
        $resList['content']['Python'] = PythonJobs::find()->where(['city'=>$area])->count();
        $resList['content']['C++'] = CplusJobs::find()->where(['city'=>$area])->count();
        $resList['content']['PHP'] = HypertextPreprocessorJobs::find()->where(['city'=>$area])->count();
        $resList['content']['IOS'] = IosJobs::find()->where(['city'=>$area])->count();
        $resList['content']['Web'] = WebJobs::find()->where(['city'=>$area])->count();
        $resList['content']['大数据'] = BigdataJobs::find()->where(['city'=>$area])->count();
        $resList['content']['数据挖掘'] = DataMiningJobs::find()->where(['city'=>$area])->count();
        $resList['content']['产品经理'] = ProgramManagerJobs::find()->where(['city'=>$area])->count();
        $resList['content']['机器学习'] = MlJobs::find()->where(['city'=>$area])->count();
        $total = 0;
        foreach ($resList['content'] as $item => $value){
            $total += $value;
        }
        $resList['total'] = $total;

        return json_encode($resList);
    }
}