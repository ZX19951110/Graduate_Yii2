<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/9 0009
 * Time: 下午 9:38
 */
namespace app\models;
use yii\db\ActiveRecord;
class IosJobs extends ActiveRecord{

    public static function tableName()
    {
        return "ios";
    }
}