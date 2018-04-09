<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/3 0003
 * Time: 下午 2:22
 */
namespace app\models;
use yii\db\ActiveRecord;
class DataMiningJobs extends ActiveRecord{

    public static function tableName()
    {
        return "data_mining";
    }
}