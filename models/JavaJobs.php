<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/8 0008
 * Time: 下午 10:11
 */
namespace app\models;
use yii\db\ActiveRecord;
class JavaJobs extends ActiveRecord{
    public static function tableName()
    {
        return "java";
    }
}