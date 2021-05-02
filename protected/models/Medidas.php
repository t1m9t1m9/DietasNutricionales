<?php

/**
 * This is the model class for table "medidas".
 *
 * The followings are the available columns in table 'medidas':
 * @property string $fecha_med
 * @property string $edad_med
 * @property string $peso_med
 * @property string $talla_med
 * @property string $imc_med
 * @property string $mtb_med
 * @property string $sex_med
 * @property string $ced_usu_med
 *
 * The followings are the available model relations:
 * @property Usuario $cedUsuMed
 */
class Medidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'medidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_med, edad_med, peso_med, talla_med, imc_med, mtb_med, sex_med, ced_usu_med', 'required'),
			array('fecha_med, ced_usu_med', 'length', 'max'=>10),
			array('edad_med, peso_med, talla_med, imc_med, mtb_med, sex_med', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fecha_med, edad_med, peso_med, talla_med, imc_med, mtb_med, sex_med, ced_usu_med', 'safe', 'on'=>'search'),
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
			'cedUsuMed' => array(self::BELONGS_TO, 'Usuario', 'ced_usu_med'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha_med' => 'Fecha Med',
			'edad_med' => 'Edad Med',
			'peso_med' => 'Peso Med',
			'talla_med' => 'Talla Med',
			'imc_med' => 'Imc Med',
			'mtb_med' => 'Mtb Med',
			'sex_med' => 'Sex Med',
			'ced_usu_med' => 'Ced Usu Med',
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

		$criteria->compare('fecha_med',$this->fecha_med,true);
		$criteria->compare('edad_med',$this->edad_med,true);
		$criteria->compare('peso_med',$this->peso_med,true);
		$criteria->compare('talla_med',$this->talla_med,true);
		$criteria->compare('imc_med',$this->imc_med,true);
		$criteria->compare('mtb_med',$this->mtb_med,true);
		$criteria->compare('sex_med',$this->sex_med,true);
		$criteria->compare('ced_usu_med',$this->ced_usu_med,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Medidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
