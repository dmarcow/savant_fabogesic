<?php

/**
 * This is the model class for table "PresentacionesSub3".
 *
 * The followings are the available columns in table 'PresentacionesSub3':
 * @property integer $id
 * @property string $Image1Url
 * @property string $Image2Url
 * @property string $Image3Url
 * @property string $Image4Url
 * @property string $Image5Url
 * @property string $Image6Url
 * @property string $Image7Url
 * @property string $Image8Url
 * @property string $Image9Url
 * @property string $Image10Url
 * @property string $Text1
 * @property string $Text2
 * @property string $Text3
 * @property string $Text4
 * @property string $Text5
 * @property string $Text6
 * @property string $BtnImageUrl1
 * @property string $BtnImageUrl2
 * @property string $Text9
 * @property string $Text10
 * @property string $Text11
 * @property string $Text12
 * @property string $Text13
 * @property string $Prospecto1ImageUrl
 * @property string $Prospecto2ImageUrl
 * @property string $Prospecto
 * @property string $Prospecto2
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class PresentacionesSub3 extends CActiveRecord
{
    public $FImage1Url;
    public $FImage2Url;
    public $FImage3Url;
    public $FImage4Url;
    public $FImage5Url;
    public $FImage6Url;
    public $FImage7Url;
    public $FImage8Url;
    public $FImage9Url;
    public $FImage10Url;
    public $FBtnImageUrl1;
    public $FBtnImageUrl2;
    public $FProspecto1ImageUrl;
    public $FProspecto2ImageUrl;
    public $ProspectoFile;
    public $ProspectoFile2;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'PresentacionesSub3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Image1Url, Image2Url, Image3Url, Image4Url, Image5Url, Image6Url, Image7Url, Image8Url, Image9Url, Image10Url, Text1, Text2, Text3, Text4, Text5, Text6, BtnImageUrl1, BtnImageUrl2, Text9, Text10, Text11, Text12, Text13, Prospecto1ImageUrl, Prospecto2ImageUrl', 'required'),
			array('Image1Url, Image2Url, Image3Url, Image4Url, Image5Url, Image6Url, Image7Url, Image8Url, Image9Url, Image10Url, Text2, Text3, BtnImageUrl1, BtnImageUrl2, Prospecto1ImageUrl, Prospecto2ImageUrl', 'length', 'max'=>200),
			array('Text1', 'length', 'max'=>300),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, Image1Url, Image2Url, Image3Url, Image4Url, Image5Url, Image6Url, Image7Url, Image8Url, Image9Url, Image10Url, Text1, Text2, Text3, Text4, Text5, Text6, BtnImageUrl1, BtnImageUrl2, Text9, Text10, Text11, Text12, Text13, Prospecto1ImageUrl, Prospecto2ImageUrl, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),

            array('FImage1Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage2Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage3Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage4Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage5Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage6Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage7Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage8Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage9Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FImage10Url', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),   
            array('FBtnImageUrl1', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FBtnImageUrl2', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),   
            array('FProspecto1ImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
            array('FProspecto2ImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('ProspectoFile', 'file','types'=>'pdf', 'allowEmpty'=>true, 'on'=>'update'), 
			array('ProspectoFile2', 'file','types'=>'pdf', 'allowEmpty'=>true, 'on'=>'update'),                                                  
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
			'Image1Url' => 'Imagen Sección Pediátrica',
			'Image2Url' => 'Header Sección Pediátrica',
			'Image3Url' => 'Imagen Tip Sección Pediátrica',
			'Image4Url' => 'Imagen Caja Niños x 10',
			'Image5Url' => 'Imagen Venta Bajo Receta',
			'Image6Url' => 'Imagen Niña',
			'Image7Url' => 'Imagen Caja Niños x 20',
			'Image8Url' => 'Imagen Venta Libre',
			'Image9Url' => 'Imagen Vaquita',
			'Image10Url' => 'Imagen Niño',
			'Text1' => 'Texto 1',
			'Text2' => 'Texto 2',
			'Text3' => 'Texto 3',
			'Text4' => 'Texto 4',
			'Text5' => 'Texto 5',
			'Text6' => 'Texto 6',
			'BtnImageUrl1' => 'Botón Pregunta 1',
			'BtnImageUrl2' => 'Botón Pregunta 2',
			'Text9' => 'Texto 9',
			'Text10' => 'Texto 10',
			'Text11' => 'Texto 11',
			'Text12' => 'Texto 12',
			'Text13' => 'Texto 13',
			'Prospecto1ImageUrl' => 'Prospecto 2%',
			'Prospecto2ImageUrl' => 'Prospecto 4%',
			'FechaCreacion' => 'Fecha Creacion',
			'FechaModificacion' => 'Fecha Modificacion',
            'Prospecto' => 'PDF Prospecto 2%',
			'Prospecto2' => 'PDF Prospecto 4%',

			'ProspectoFile' => 'PDF Prospecto 2%',
			'ProspectoFile2' => 'PDF Prospecto 4%',
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
		$criteria->compare('Image2Url',$this->Image2Url,true);
		$criteria->compare('Image3Url',$this->Image3Url,true);
		$criteria->compare('Image4Url',$this->Image4Url,true);
		$criteria->compare('Image5Url',$this->Image5Url,true);
		$criteria->compare('Image6Url',$this->Image6Url,true);
		$criteria->compare('Image7Url',$this->Image7Url,true);
		$criteria->compare('Image8Url',$this->Image8Url,true);
		$criteria->compare('Image9Url',$this->Image9Url,true);
		$criteria->compare('Image10Url',$this->Image10Url,true);
		$criteria->compare('Text1',$this->Text1,true);
		$criteria->compare('Text2',$this->Text2,true);
		$criteria->compare('Text3',$this->Text3,true);
		$criteria->compare('Text4',$this->Text4,true);
		$criteria->compare('Text5',$this->Text5,true);
		$criteria->compare('Text6',$this->Text6,true);
		$criteria->compare('BtnImageUrl1',$this->BtnImageUrl1,true);
		$criteria->compare('BtnImageUrl2',$this->BtnImageUrl2,true);
		$criteria->compare('Text9',$this->Text9,true);
		$criteria->compare('Text10',$this->Text10,true);
		$criteria->compare('Text11',$this->Text11,true);
		$criteria->compare('Text12',$this->Text12,true);
		$criteria->compare('Text13',$this->Text13,true);
		$criteria->compare('Prospecto1ImageUrl',$this->Prospecto1ImageUrl,true);
		$criteria->compare('Prospecto2ImageUrl',$this->Prospecto2ImageUrl,true);
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
	 * @return PresentacionesSub3 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
