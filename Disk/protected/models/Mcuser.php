<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%tbl_mcuser}}".
 *
 * @property integer $id
 * @property string $userlogin
 * @property string $userpassword
 * @property string $group
 * @property string $username
 * @property string $usertel
 * @property string $QQ
 * @property string $weixin
 * @property string $weibo
 * @property string $ip
 * @property integer $states
 * @property integer $signin_time
 * @property integer $update_time
 * @property integer $create_time
 */
class Mcuser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tbl_mcuser}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userlogin', 'userpassword'], 'required'],
            [['states', 'signin_time', 'update_time', 'create_time'], 'integer'],
            [['userlogin', 'userpassword', 'group', 'username', 'usertel', 'weixin', 'weibo'], 'string', 'max' => 32],
            [['QQ'], 'string', 'max' => 16],
            [['ip'], 'string', 'max' => 128]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userlogin' => 'Userlogin',
            'userpassword' => 'Userpassword',
            'group' => 'Group',
            'username' => 'Username',
            'usertel' => 'Usertel',
            'QQ' => 'Qq',
            'weixin' => 'Weixin',
            'weibo' => 'Weibo',
            'ip' => 'Ip',
            'states' => 'States',
            'signin_time' => 'Signin Time',
            'update_time' => 'Update Time',
            'create_time' => 'Create Time',
        ];
    }
}
