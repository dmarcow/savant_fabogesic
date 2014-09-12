<?php

/**
 * This is the model class for table "DoloresCabeza".
 *
 * The followings are the available columns in table 'DoloresCabeza':
 * @property integer $id
 * @property string $ImageUrl
 * @property string $Subtitle
 * @property string $Text1
 * @property string $Text2
 * @property string $Text3
 * @property string $Text4
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class DoloresCabeza extends CActiveRecord
{
	public $FImageUrl;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'DoloresCabeza';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ImageUrl, Subtitle, Text1, Text2, Text3, Text4, FechaCreacion, FechaModificacion', 'required'),
			array('ImageUrl', 'length', 'max'=>200),
			array('Subtitle', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, ImageUrl, Subtitle, Text1, Text2, Text3, Text4, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),

			array('FImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
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
			'ImageUrl' => 'Imagen',
			'Subtitle' => 'Subtítulo',
			'Text1' => 'Párrafo 1',
			'Text2' => 'Párrafo 2',
			'Text3' => 'Párrafo 3',
			'Text4' => 'Párrafo 4',
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
		$criteria->compare('ImageUrl',$this->ImageUrl,true);
		$criteria->compare('Subtitle',$this->Subtitle,true);
		$criteria->compare('Text1',$this->Text1,true);
		$criteria->compare('Text2',$this->Text2,true);
		$criteria->compare('Text3',$this->Text3,true);
		$criteria->compare('Text4',$this->Text4,true);
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
	 * @return DoloresCabeza the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
