<?php

/**
 * This is the model class for table "intervalo".
 *
 * The followings are the available columns in table 'intervalo':
 * @property integer $intervalo_id
 * @property string $intervalo_inicio
 * @property string $intervalo_termino
 *
 * The followings are the available model relations:
 * @property DiaIntervaloProfesional[] $diaIntervaloProfesionals
 */
class Intervalo extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Intervalo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'intervalo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('intervalo_inicio, intervalo_termino', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('intervalo_id, intervalo_inicio, intervalo_termino', 'safe', 'on'=>'search'),
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
			'diaIntervaloProfesionals' => array(self::HAS_MANY, 'DiaIntervaloProfesional', 'intervalo_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'intervalo_id' => 'Intervalo',
			'intervalo_inicio' => 'Intervalo Inicio',
			'intervalo_termino' => 'Intervalo Termino',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('intervalo_id',$this->intervalo_id);
		$criteria->compare('intervalo_inicio',$this->intervalo_inicio,true);
		$criteria->compare('intervalo_termino',$this->intervalo_termino,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}