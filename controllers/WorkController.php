<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/24 0024
 * Time: 上午 11:56
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
class WorkController extends Controller
{
    public function actionWorkyear()
    {
        $job = Yii::$app->request->get('job');
        $workYears = ['1年以下', '1-3年', '3-5年', '5-10年', '不限'];
        $res = [];
        $count = 0;
        switch ($job) {
            case 'java':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)JavaJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'python':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)PythonJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'php':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)HypertextPreprocessorJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'ios':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)IosJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'web':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)WebJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'big-data':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)BigDataJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'c-plus':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)CPlusJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'data-mining':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)DataMiningJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'program-manager':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)ProgramManagerJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            case 'm-l':
                foreach ($workYears as $year) {
                    $res['content'][$year] = (int)MlJobs::find()->where(['workYear' => $year])->count();
                }
                foreach ($res['content'] as $key => $value){
                    $count += (int)$value;
                }
                $res['count'] = $count;
                header('Access-Control-Allow-Origin: *');
                return json_encode($res);
                break;
            default:
                return json_encode(['您查找的信息不存在']);
        }
    }
    public function actionEducation(){
        $job = Yii::$app->request->get('job');
        switch ($job){
            case 'python':
                $queryList = PythonJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = PythonJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'php':
                $queryList = HypertextPreprocessorJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = HypertextPreprocessorJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'web':
                $queryList = WebJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = WebJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'java':
                $queryList = JavaJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = JavaJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'ios':
                $queryList = IosJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = IosJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'c-plus':
                $queryList = CPlusJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = CPlusJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'big-data':
                $queryList = BigDataJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = BigDataJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'data-mining':
                $queryList = DataMiningJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = DataMiningJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'program-manager':
                $queryList = ProgramManagerJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = ProgramManagerJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            case 'm-l':
                $queryList = MlJobs::find()->select(['education'])->groupBy('education')->asArray()->all();
                foreach ($queryList as $item){
                    $educationList[] = $item['education'];
                }
                foreach ($educationList as $education){
                    $resList[$education] = MlJobs::find()->where(['education' => $education])->count();
                }
                return json_encode($resList);
            default:
                return json_encode(['您查找的信息不存在']);
        }
    }
}
