<?php

/**
 * This is the model class for table "PresentacionesSub2".
 *
 * The followings are the available columns in table 'PresentacionesSub2':
 * @property integer $id
 * @property string $Sub1ImageUrl
 * @property string $Sub1Text
 * @property string $Sub1Link
 * @property string $Sub2ImageUrl
 * @property string $Sub2Text
 * @property string $Sub2Link
 * @property string $Sub3ImageUrl
 * @property string $Sub3Text
 * @property string $Sub3Link
 * @property string $FechaCreacion
 * @property string $FechaModifcacion
 */
class PresentacionesSub2 extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PresentacionesSub2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sub1ImageUrl, Sub1Text, Sub1Link, Sub2ImageUrl, Sub2Text, Sub2Link, Sub3ImageUrl, Sub3Text, Sub3Link, FechaCreacion, FechaModifcacion', 'required'),
			array('Sub1ImageUrl, Sub1Text, Sub1Link, Sub2ImageUrl, Sub2Text, Sub2Link, Sub3ImageUrl, Sub3Text, Sub3Link', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Sub1ImageUrl, Sub1Text, Sub1Link, Sub2ImageUrl, Sub2Text, Sub2Link, Sub3ImageUrl, Sub3Text, Sub3Link, FechaCreacion, FechaModifcacion', 'safe', 'on'=>'search'),
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
			'Sub1ImageUrl' => 'Sub1 Image Url',
			'Sub1Text' => 'Sub1 Text',
			'Sub1Link' => 'Sub1 Link',
			'Sub2ImageUrl' => 'Sub2 Image Url',
			'Sub2Text' => 'Sub2 Text',
			'Sub2Link' => 'Sub2 Link',
			'Sub3ImageUrl' => 'Sub3 Image Url',
			'Sub3Text' => 'Sub3 Text',
			'Sub3Link' => 'Sub3 Link',
			'FechaCreacion' => 'Fecha Creacion',
			'FechaModifcacion' => 'Fecha Modifcacion',
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
		$criteria->compare('Sub1ImageUrl',$this->Sub1ImageUrl,true);
		$criteria->compare('Sub1Text',$this->Sub1Text,true);
		$criteria->compare('Sub1Link',$this->Sub1Link,true);
		$criteria->compare('Sub2ImageUrl',$this->Sub2ImageUrl,true);
		$criteria->compare('Sub2Text',$this->Sub2Text,true);
		$criteria->compare('Sub2Link',$this->Sub2Link,true);
		$criteria->compare('Sub3ImageUrl',$this->Sub3ImageUrl,true);
		$criteria->compare('Sub3Text',$this->Sub3Text,true);
		$criteria->compare('Sub3Link',$this->Sub3Link,true);
		$criteria->compare('FechaCreacion',$this->FechaCreacion,true);
		$criteria->compare('FechaModifcacion',$this->FechaModifcacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresentacionesSub2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
