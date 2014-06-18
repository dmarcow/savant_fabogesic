<?php

/**
 * This is the model class for table "ProspectoIbuprofeno".
 *
 * The followings are the available columns in table 'ProspectoIbuprofeno':
 * @property integer $id
 * @property string $Title
 * @property string $Subtitle
 * @property string $Text1
 * @property string $TextIcon1
 * @property string $ImageIcon1Url
 * @property string $TextIcon2
 * @property string $ImageIcon2Url
 * @property string $TextIcon3
 * @property string $ImageIcon3Url
 * @property string $TextIcon4
 * @property string $ImageIcon4Url
 * @property string $GraphicImageUrl
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class ProspectoIbuprofeno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ProspectoIbuprofeno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Title, Subtitle, Text1, TextIcon1, ImageIcon1Url, TextIcon2, ImageIcon2Url, TextIcon3, ImageIcon3Url, TextIcon4, ImageIcon4Url, GraphicImageUrl, FechaCreacion, FechaModificacion', 'required'),
			array('Title, TextIcon1, ImageIcon1Url, TextIcon2, ImageIcon2Url, TextIcon3, ImageIcon3Url, TextIcon4, ImageIcon4Url, GraphicImageUrl', 'length', 'max'=>200),
			array('Subtitle, Text1', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Title, Subtitle, Text1, TextIcon1, ImageIcon1Url, TextIcon2, ImageIcon2Url, TextIcon3, ImageIcon3Url, TextIcon4, ImageIcon4Url, GraphicImageUrl, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),
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
			'Title' => 'Title',
			'Subtitle' => 'Subtitle',
			'Text1' => 'Text1',
			'TextIcon1' => 'Text Icon1',
			'ImageIcon1Url' => 'Image Icon1 Url',
			'TextIcon2' => 'Text Icon2',
			'ImageIcon2Url' => 'Image Icon2 Url',
			'TextIcon3' => 'Text Icon3',
			'ImageIcon3Url' => 'Image Icon3 Url',
			'TextIcon4' => 'Text Icon4',
			'ImageIcon4Url' => 'Image Icon4 Url',
			'GraphicImageUrl' => 'Graphic Image Url',
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
		$criteria->compare('Subtitle',$this->Subtitle,true);
		$criteria->compare('Text1',$this->Text1,true);
		$criteria->compare('TextIcon1',$this->TextIcon1,true);
		$criteria->compare('ImageIcon1Url',$this->ImageIcon1Url,true);
		$criteria->compare('TextIcon2',$this->TextIcon2,true);
		$criteria->compare('ImageIcon2Url',$this->ImageIcon2Url,true);
		$criteria->compare('TextIcon3',$this->TextIcon3,true);
		$criteria->compare('ImageIcon3Url',$this->ImageIcon3Url,true);
		$criteria->compare('TextIcon4',$this->TextIcon4,true);
		$criteria->compare('ImageIcon4Url',$this->ImageIcon4Url,true);
		$criteria->compare('GraphicImageUrl',$this->GraphicImageUrl,true);
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
	 * @return ProspectoIbuprofeno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
