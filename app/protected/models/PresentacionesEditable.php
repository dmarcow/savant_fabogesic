<?php

/**
 * This is the model class for table "PresentacionesEditable".
 *
 * The followings are the available columns in table 'PresentacionesEditable':
 * @property integer $id
 * @property string $Sub1ImageUrl
 * @property string $Sub1Text
 * @property string $Sub2ImageUrl
 * @property string $Sub2Text
 * @property string $Sub3ImageUrl
 * @property string $Sub3Text
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class PresentacionesEditable extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PresentacionesEditable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Sub1ImageUrl, Sub1Text, Sub2ImageUrl, Sub2Text, Sub3ImageUrl, Sub3Text, FechaCreacion, FechaModificacion', 'required'),
			array('Sub1ImageUrl, Sub2ImageUrl, Sub3ImageUrl', 'length', 'max'=>200),
			array('Sub1Text, Sub2Text, Sub3Text', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Sub1ImageUrl, Sub1Text, Sub2ImageUrl, Sub2Text, Sub3ImageUrl, Sub3Text, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),
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
			'Sub2ImageUrl' => 'Sub2 Image Url',
			'Sub2Text' => 'Sub2 Text',
			'Sub3ImageUrl' => 'Sub3 Image Url',
			'Sub3Text' => 'Sub3 Text',
			'FechaCreacion' => 'Fecha Creacion',
			'FechaModificacion' => 'Fecha Modificacion',
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
		$criteria->compare('Sub2ImageUrl',$this->Sub2ImageUrl,true);
		$criteria->compare('Sub2Text',$this->Sub2Text,true);
		$criteria->compare('Sub3ImageUrl',$this->Sub3ImageUrl,true);
		$criteria->compare('Sub3Text',$this->Sub3Text,true);
		$criteria->compare('FechaCreacion',$this->FechaCreacion,true);
		$criteria->compare('FechaModificacion',$this->FechaModificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PresentacionesEditable the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
