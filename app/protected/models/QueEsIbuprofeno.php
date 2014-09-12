<?php

/**
 * This is the model class for table "QueEsIbuprofeno".
 *
 * The followings are the available columns in table 'QueEsIbuprofeno':
 * @property integer $id
 * @property string $Title
 * @property string $SubTitle
 * @property string $Text1
 * @property string $Text2
 * @property string $Image1Url
 * @property string $Image2Url
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class QueEsIbuprofeno extends CActiveRecord
{
    public $FImage1Url;
    public $FImage2Url;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'QueEsIbuprofeno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Title, SubTitle, Text1, Text2, Image1Url, Image2Url', 'required'),
			array('Title, Image1Url, Image2Url', 'length', 'max'=>200),
			array('SubTitle', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Title, SubTitle, Text1, Text2, Image1Url, Image2Url, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),
			array('FImage1Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage2Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
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
			'Title' => 'Título',
			'SubTitle' => 'Sub Título',
			'Text1' => 'Texto 1',
			'Text2' => 'Texto 2',
			'Image1Url' => 'Imagen Cápsulas',
			'Image2Url' => 'Imagen ADN',
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
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('SubTitle',$this->SubTitle,true);
		$criteria->compare('Text1',$this->Text1,true);
		$criteria->compare('Text2',$this->Text2,true);
		$criteria->compare('Image1Url',$this->Image1Url,true);
		$criteria->compare('Image2Url',$this->Image2Url,true);
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
	 * @return QueEsIbuprofeno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
