<?php

/**
 * This is the model class for table "porcentajecomidas".
 *
 * The followings are the available columns in table 'porcentajecomidas':
 * @property integer $id
 * @property integer $desayuno
 * @property integer $brakemanana
 * @property integer $almuerzo
 * @property integer $braketarde
 * @property integer $merienda
 */
class Porcentajecomidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'porcentajecomidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('desayuno, brakemanana, almuerzo, braketarde, merienda', 'required'),
			array('desayuno, brakemanana, almuerzo, braketarde, merienda', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, desayuno, brakemanana, almuerzo, braketarde, merienda', 'safe', 'on'=>'search'),
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
			'desayuno' => 'Desayuno',
			'brakemanana' => 'Brakemanana',
			'almuerzo' => 'Almuerzo',
			'braketarde' => 'Braketarde',
			'merienda' => 'Merienda',
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
		$criteria->compare('desayuno',$this->desayuno);
		$criteria->compare('brakemanana',$this->brakemanana);
		$criteria->compare('almuerzo',$this->almuerzo);
		$criteria->compare('braketarde',$this->braketarde);
		$criteria->compare('merienda',$this->merienda);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Porcentajecomidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
