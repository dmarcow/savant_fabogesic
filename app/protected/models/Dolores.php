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
 * @property string $FechaCreacion
 * @property string $FechaModificacion
 */
class Dolores extends CActiveRecord
{
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
			array('MuscularesImageUrl, MuscularesSubtitle, MuscularesSub1, PosturalesImageUrl, PostularesSubtitle, PostularesSub1, PostularesSub2, PostularesSub3, MenstrualesImageUrl, MenstrualesSubtitle, MenstrualesSub1, MenstrualesSub2, MenstrualesSub2ImageUrl, MenstrualesSub3, ArticularesImageUrl, ArticularesSubtitle, ArticularesSub1, ArticularesSub2, ArticularesSub3, ArticularesSub4, ArticularesSub5, FechaCreacion, FechaModificacion', 'required'),
			array('MuscularesImageUrl, PosturalesImageUrl, MenstrualesImageUrl, MenstrualesSub2ImageUrl, ArticularesImageUrl', 'length', 'max'=>200),
			array('MuscularesSubtitle, PostularesSubtitle, MenstrualesSubtitle, ArticularesSubtitle', 'length', 'max'=>400),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, MuscularesImageUrl, MuscularesSubtitle, MuscularesSub1, PosturalesImageUrl, PostularesSubtitle, PostularesSub1, PostularesSub2, PostularesSub3, MenstrualesImageUrl, MenstrualesSubtitle, MenstrualesSub1, MenstrualesSub2, MenstrualesSub2ImageUrl, MenstrualesSub3, ArticularesImageUrl, ArticularesSubtitle, ArticularesSub1, ArticularesSub2, ArticularesSub3, ArticularesSub4, ArticularesSub5, FechaCreacion, FechaModificacion', 'safe', 'on'=>'search'),
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
			'MuscularesImageUrl' => 'Musculares Image Url',
			'MuscularesSubtitle' => 'Musculares Subtitle',
			'MuscularesSub1' => 'Musculares Sub1',
			'PosturalesImageUrl' => 'Posturales Image Url',
			'PostularesSubtitle' => 'Postulares Subtitle',
			'PostularesSub1' => 'Postulares Sub1',
			'PostularesSub2' => 'Postulares Sub2',
			'PostularesSub3' => 'Postulares Sub3',
			'MenstrualesImageUrl' => 'Menstruales Image Url',
			'MenstrualesSubtitle' => 'Menstruales Subtitle',
			'MenstrualesSub1' => 'Menstruales Sub1',
			'MenstrualesSub2' => 'Menstruales Sub2',
			'MenstrualesSub2ImageUrl' => 'Menstruales Sub2 Image Url',
			'MenstrualesSub3' => 'Menstruales Sub3',
			'ArticularesImageUrl' => 'Articulares Image Url',
			'ArticularesSubtitle' => 'Articulares Subtitle',
			'ArticularesSub1' => 'Articulares Sub1',
			'ArticularesSub2' => 'Articulares Sub2',
			'ArticularesSub3' => 'Articulares Sub3',
			'ArticularesSub4' => 'Articulares Sub4',
			'ArticularesSub5' => 'Articulares Sub5',
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
