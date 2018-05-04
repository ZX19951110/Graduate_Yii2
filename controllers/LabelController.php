<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/5/4 0004
 * Time: 上午 11:38
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
/*todo: 各职业工作经验list*/
class LabelController extends Controller{
    public function actionIndex(){
        $labelList = ['五险一金', '带薪年假', '弹性工作', '绩效奖金', '股票期权', '岗位晋升', '午餐补助'];
        $job = Yii::$app->request->get('job');
        switch ($job){
            case 'python':
                foreach ($labelList as $label){
                    $resList[$label] = (int)PythonJobs::find()->where(['like', 'companyLabelList', $label])->count();
            }
                return json_encode($resList);
                break;
            case 'php':
                foreach ($labelList as $label){
                    $resList[$label] = (int)HypertextPreprocessorJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'web':
                foreach ($labelList as $label){
                    $resList[$label] = (int)WebJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'java':
                foreach ($labelList as $label){
                    $resList[$label] = (int)JavaJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'ios':
                foreach ($labelList as $label){
                    $resList[$label] = (int)IosJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'c-plus':
                foreach ($labelList as $label){
                    $resList[$label] = (int)CPlusJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'big-data':
                foreach ($labelList as $label){
                    $resList[$label] = (int)BigDataJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'data-mining':
                foreach ($labelList as $label){
                    $resList[$label] = (int)DataMiningJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'program-manager':
                foreach ($labelList as $label){
                    $resList[$label] = (int)ProgramManagerJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            case 'm-l':
                foreach ($labelList as $label){
                    $resList[$label] = (int)MlJobs::find()->where(['like', 'companyLabelList', $label])->count();
                }
                return json_encode($resList);
                break;
            default:
                return json_encode(['您查找的信息不存在']);
        }
    }
}