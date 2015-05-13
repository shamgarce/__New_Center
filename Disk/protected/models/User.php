<?php

/**
 * This is the model class for table "{{user}}".
 *
 * The followings are the available columns in table '{{user}}':
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
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{user}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userlogin, userpassword', 'required'),
			array('states, signin_time, update_time, create_time', 'numerical', 'integerOnly'=>true),
			array('userlogin, userpassword, group, username, usertel, weixin, weibo', 'length', 'max'=>32),
			array('QQ', 'length', 'max'=>16),
			array('ip', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, userlogin, userpassword, group, username, usertel, QQ, weixin, weibo, ip, states, signin_time, update_time, create_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
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
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('userlogin',$this->userlogin,true);
		$criteria->compare('userpassword',$this->userpassword,true);
		$criteria->compare('group',$this->group,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('usertel',$this->usertel,true);
		$criteria->compare('QQ',$this->QQ,true);
		$criteria->compare('weixin',$this->weixin,true);
		$criteria->compare('weibo',$this->weibo,true);
		$criteria->compare('ip',$this->ip,true);
		$criteria->compare('states',$this->states);
		$criteria->compare('signin_time',$this->signin_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
