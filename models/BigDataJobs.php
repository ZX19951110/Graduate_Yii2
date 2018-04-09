<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/3 0003
 * Time: 下午 2:22
 */
namespace app\models;
use yii\db\ActiveRecord;
class BigDataJobs extends ActiveRecord{

    public static function tableName()
    {
        return "big_data";
    }
}