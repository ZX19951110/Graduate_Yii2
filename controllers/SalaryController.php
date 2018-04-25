<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/17 0017
 * Time: 上午 10:31
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

class SalaryController extends Controller{
    public function actionShow(){
        $job = Yii::$app->request->get('job');
        switch ($job)
                    {
                        case 'java':
                            $cityList = JavaJobs::findBySql('select city from java group by city')->asArray()->all();
                            $resList = [];
                            foreach ($cityList as $city) {
                                $salaryList = JavaJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                                foreach ($salaryList as $salary) {
                                    preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                                    $lower[] = (int)$salaryRange[0][0];
                                }
                                $Sum = 0;
                                foreach ($lower as $low) {
                                    $Sum += $low;
                                }
                                $salary = round($Sum / count($lower));
                                $lower = [];
                                $resList[] = ['city' => $city, 'salary' => $salary];
                            }
                            return json_encode($resList);
                            break;
                        case 'python':
                            $cityList = PythonJobs::findBySql('select city from python group by city')->asArray()->all();
                            $resList = [];
                            foreach ($cityList as $city) {
                                $salaryList = PythonJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                                foreach ($salaryList as $salary) {
                                    preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                                    $lower[] = (int)$salaryRange[0][0];
                                }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'php':
                $cityList = HypertextPreprocessorJobs::findBySql('select city from php group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = HypertextPreprocessorJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'ios':
                $cityList = IosJobs::findBySql('select city from ios group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = IosJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'web':
                $cityList = WebJobs::findBySql('select city from web group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = WebJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'big-data':
                $cityList = BigDataJobs::findBySql('select city from big_data group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = BigDataJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'c-plus':
                $cityList = CPlusJobs::findBySql('select city from c_plus group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = CPlusJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'data-mining':
                $cityList = DataMiningJobs::findBySql('select city from data_mining group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = DataMiningJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'program-manager':
                $cityList = ProgramManagerJobs::findBySql('select city from program_manager group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = ProgramManagerJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
            case 'm-l':
                $cityList = MlJobs::findBySql('select city from m_l group by city')->asArray()->all();
                $resList = [];
                foreach ($cityList as $city) {
                    $salaryList = MLJobs::find()->select('salary')->where(['city' => $city])->asArray()->all();
                    foreach ($salaryList as $salary) {
                        preg_match_all("/\d{1,2}/", $salary['salary'], $salaryRange);
                        $lower[] = (int)$salaryRange[0][0];
                    }
                    $Sum = 0;
                    foreach ($lower as $low) {
                        $Sum += $low;
                    }
                    $salary = round($Sum / count($lower));
                    $lower = [];
                    $resList[] = ['city' => $city, 'salary' => $salary];
                }
                return json_encode($resList);
                break;
        }
    }
}
