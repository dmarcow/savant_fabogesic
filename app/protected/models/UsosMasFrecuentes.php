<?php

/**
 * This is the model class for table "UsosMasFrecuentes".
 *
 * The followings are the available columns in table 'UsosMasFrecuentes':
 * @property integer $id
 * @property string $Image1Url
 * @property string $Text1
 * @property string $Image2Url
 * @property string $Text2
 * @property string $Image3Url
 * @property string $Text3
 * @property string $Image4Url
 * @property string $Text4
 * @property string $Image5Url
 * @property string $Text5
 * @property string $Image6Url
 * @property string $Text6
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class UsosMasFrecuentes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'UsosMasFrecuentes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Image1Url, Text1, Image2Url, Text2, Image3Url, Text3, Image4Url, Text4, Image5Url, Text5, Image6Url, Text6,', 'required'),
			array('Image1Url, Text1, Image2Url, Text2, Image3Url, Text3, Image4Url, Text4, Image5Url, Text5, Image6Url, Text6, FechaCreacion, FechaModificacion', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Image1Url, Text1, Image2Url, Text2, Image3Url, Text3, Image4Url, Text4, Image5Url, Text5, Image6Url, Text6, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),
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
			'Image1Url' => 'Image1 Url',
			'Text1' => 'Text1',
			'Image2Url' => 'Image2 Url',
			'Text2' => 'Text2',
			'Image3Url' => 'Image3 Url',
			'Text3' => 'Text3',
			'Image4Url' => 'Image4 Url',
			'Text4' => 'Text4',
			'Image5Url' => 'Image5 Url',
			'Text5' => 'Text5',
			'Image6Url' => 'Image6 Url',
			'Text6' => 'Text6',
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
		$criteria->compare('Image1Url',$this->Image1Url,true);
		$criteria->compare('Text1',$this->Text1,true);
		$criteria->compare('Image2Url',$this->Image2Url,true);
		$criteria->compare('Text2',$this->Text2,true);
		$criteria->compare('Image3Url',$this->Image3Url,true);
		$criteria->compare('Text3',$this->Text3,true);
		$criteria->compare('Image4Url',$this->Image4Url,true);
		$criteria->compare('Text4',$this->Text4,true);
		$criteria->compare('Image5Url',$this->Image5Url,true);
		$criteria->compare('Text5',$this->Text5,true);
		$criteria->compare('Image6Url',$this->Image6Url,true);
		$criteria->compare('Text6',$this->Text6,true);
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
	 * @return UsosMasFrecuentes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
