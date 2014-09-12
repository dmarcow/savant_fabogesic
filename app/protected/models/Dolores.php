<?php

/**
 * This is the model class for table "Dolores".
 *
 * The followings are the available columns in table 'Dolores':
 * @property integer $id
 * @property string $MuscularesImageUrl
 * @property string $MuscularesSubtitle
 * @property string $MuscularesSub1
 * @property string $PosturalesImageUrl
 * @property string $PostularesSubtitle
 * @property string $PostularesSub1
 * @property string $PostularesSub2
 * @property string $PostularesSub3
 * @property string $MenstrualesImageUrl
 * @property string $MenstrualesSubtitle
 * @property string $MenstrualesSub1
 * @property string $MenstrualesSub2
 * @property string $MenstrualesSub2ImageUrl
 * @property string $MenstrualesSub3
 * @property string $ArticularesImageUrl
 * @property string $ArticularesSubtitle
 * @property string $ArticularesSub1
 * @property string $ArticularesSub2
 * @property string $ArticularesSub3
 * @property string $ArticularesSub4
 * @property string $ArticularesSub5
 * @property string $NinosImageUrl
 * @property string $NinosSubtitle
 * @property string $NinosSub1
 * @property string $NinosSub2
 * @property string $NinosSub3
 * @property string $NinosSub4
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class Dolores extends CActiveRecord
{
	public $FMuscularesImageUrl;
	public $FPosturalesImageUrl;
	public $FMenstrualesImageUrl;
	public $FMenstrualesSub2ImageUrl;
	public $FArticularesImageUrl;
	public $FNinosImageUrl;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Dolores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('MuscularesImageUrl, MuscularesSubtitle, MuscularesSub1, PosturalesImageUrl, PostularesSubtitle, PostularesSub1, PostularesSub2, PostularesSub3, MenstrualesImageUrl, MenstrualesSubtitle, MenstrualesSub1, MenstrualesSub2, MenstrualesSub2ImageUrl, MenstrualesSub3, ArticularesImageUrl, ArticularesSubtitle, ArticularesSub1, ArticularesSub2, ArticularesSub3, ArticularesSub4, ArticularesSub5, NinosImageUrl, NinosSubtitle, NinosSub1, NinosSub2, NinosSub3, NinosSub4, FechaCreacion, FechaModificacion', 'required'),
			array('MuscularesImageUrl, PosturalesImageUrl, MenstrualesImageUrl, MenstrualesSub2ImageUrl, ArticularesImageUrl, NinosImageUrl', 'length', 'max'=>200),
			array('MuscularesSubtitle, MenstrualesSubtitle, ArticularesSubtitle, NinosSubtitle', 'length', 'max'=>400),
			array('PostularesSubtitle', 'length', 'max'=>999),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, MuscularesImageUrl, MuscularesSubtitle, MuscularesSub1, PosturalesImageUrl, PostularesSubtitle, PostularesSub1, PostularesSub2, PostularesSub3, MenstrualesImageUrl, MenstrualesSubtitle, MenstrualesSub1, MenstrualesSub2, MenstrualesSub2ImageUrl, MenstrualesSub3, ArticularesImageUrl, ArticularesSubtitle, ArticularesSub1, ArticularesSub2, ArticularesSub3, ArticularesSub4, ArticularesSub5, NinosImageUrl, NinosSubtitle, NinosSub1, NinosSub2, NinosSub3, NinosSub4, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),

			array('FMuscularesImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('FPosturalesImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('FMenstrualesImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('FMenstrualesSub2ImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('FArticularesImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
			array('FNinosImageUrl', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'),
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
			'MuscularesImageUrl' => 'Imagen Musculares',
			'MuscularesSubtitle' => 'SubTítulo Musculares',
			'MuscularesSub1' => 'Musculares Párrafo 1',
			'PosturalesImageUrl' => 'Imagen Posturales',
			'PostularesSubtitle' => 'Subtítulo Posturales',
			'PostularesSub1' => 'Posturales Párrafo 1',
			'PostularesSub2' => 'Posturales Párrafo 2',
			'PostularesSub3' => 'Posturales Párrafo 3',
			'MenstrualesImageUrl' => 'Imagen Menstruales',
			'MenstrualesSubtitle' => 'SubTítulo Menstruales',
			'MenstrualesSub1' => 'Menstruales Párrafo 1',
			'MenstrualesSub2' => 'Menstruales Párrafo 2',
			'MenstrualesSub2ImageUrl' => 'Imagen Símbolo Femenino',
			'MenstrualesSub3' => 'Menstruales Párrafo 3',
			'ArticularesImageUrl' => 'Imagen Articulares',
			'ArticularesSubtitle' => 'SubTítulo Articulares',
			'ArticularesSub1' => 'Articulares Párrafo 1',
			'ArticularesSub2' => 'Articulares Párrafo 2',
			'ArticularesSub3' => 'Articulares Párrafo 3',
			'ArticularesSub4' => 'Articulares Párrafo 4',
			'ArticularesSub5' => 'Articulares Párrafo 5',
			'NinosImageUrl' => 'Imagen Ninos',
			'NinosSubtitle' => 'SubTítulo Niños',
			'NinosSub1' => 'Niños Párrafo 1',
			'NinosSub2' => 'Niños Párrafo 2',
			'NinosSub3' => 'Niños Párrafo 3',
			'NinosSub4' => 'Niños Párrafo 4',
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
		$criteria->compare('MuscularesImageUrl',$this->MuscularesImageUrl,true);
		$criteria->compare('MuscularesSubtitle',$this->MuscularesSubtitle,true);
		$criteria->compare('MuscularesSub1',$this->MuscularesSub1,true);
		$criteria->compare('PosturalesImageUrl',$this->PosturalesImageUrl,true);
		$criteria->compare('PostularesSubtitle',$this->PostularesSubtitle,true);
		$criteria->compare('PostularesSub1',$this->PostularesSub1,true);
		$criteria->compare('PostularesSub2',$this->PostularesSub2,true);
		$criteria->compare('PostularesSub3',$this->PostularesSub3,true);
		$criteria->compare('MenstrualesImageUrl',$this->MenstrualesImageUrl,true);
		$criteria->compare('MenstrualesSubtitle',$this->MenstrualesSubtitle,true);
		$criteria->compare('MenstrualesSub1',$this->MenstrualesSub1,true);
		$criteria->compare('MenstrualesSub2',$this->MenstrualesSub2,true);
		$criteria->compare('MenstrualesSub2ImageUrl',$this->MenstrualesSub2ImageUrl,true);
		$criteria->compare('MenstrualesSub3',$this->MenstrualesSub3,true);
		$criteria->compare('ArticularesImageUrl',$this->ArticularesImageUrl,true);
		$criteria->compare('ArticularesSubtitle',$this->ArticularesSubtitle,true);
		$criteria->compare('ArticularesSub1',$this->ArticularesSub1,true);
		$criteria->compare('ArticularesSub2',$this->ArticularesSub2,true);
		$criteria->compare('ArticularesSub3',$this->ArticularesSub3,true);
		$criteria->compare('ArticularesSub4',$this->ArticularesSub4,true);
		$criteria->compare('ArticularesSub5',$this->ArticularesSub5,true);
		$criteria->compare('NinosImageUrl',$this->NinosImageUrl,true);
		$criteria->compare('NinosSubtitle',$this->NinosSubtitle,true);
		$criteria->compare('NinosSub1',$this->NinosSub1,true);
		$criteria->compare('NinosSub2',$this->NinosSub2,true);
		$criteria->compare('NinosSub3',$this->NinosSub3,true);
		$criteria->compare('NinosSub4',$this->NinosSub4,true);
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
	 * @return Dolores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
