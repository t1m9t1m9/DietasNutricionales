<?php

/**
 * This is the model class for table "desayuno".
 *
 * The followings are the available columns in table 'desayuno':
 * @property integer $id
 * @property string $nombre
 * @property double $energia
 * @property double $proteinas
 * @property double $carbohidratos
 * @property double $grasas
 * @property double $costo
 * @property integer $pdesayuno
 */
class Desayuno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'desayuno';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno', 'required', ),
			array('pdesayuno', 'numerical', 'integerOnly'=>true),
			array('energia, proteinas, carbohidratos, grasas, costo', 'numerical'),
			array('nombre', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno', 'safe', 'on'=>'search'),
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
			'nombre' => 'Nombre',
			'energia' => 'Energia',
			'proteinas' => 'Proteinas',
			'carbohidratos' => 'Carbohidratos',
			'grasas' => 'Grasas',
			'costo' => 'Costo',
			'pdesayuno' => 'Porcion desayuno',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('energia',$this->energia);
		$criteria->compare('proteinas',$this->proteinas);
		$criteria->compare('carbohidratos',$this->carbohidratos);
		$criteria->compare('grasas',$this->grasas);
		$criteria->compare('costo',$this->costo);
		$criteria->compare('pdesayuno',$this->pdesayuno);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Desayuno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
