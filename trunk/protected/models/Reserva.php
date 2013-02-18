<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property string $reserva_id
 * @property string $reserva_hora_inicio
 * @property string $reserva_hora_termino
 * @property string $reserva_fecha
 */
class Reserva extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Reserva the static model class
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
		return 'reserva';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('reserva_hora_inicio, reserva_hora_termino, reserva_fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reserva_id, reserva_hora_inicio, reserva_hora_termino, reserva_fecha', 'safe', 'on'=>'search'),
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
			'reserva_id' => 'Reserva',
			'reserva_hora_inicio' => 'Reserva Hora Inicio',
			'reserva_hora_termino' => 'Reserva Hora Termino',
			'reserva_fecha' => 'Reserva Fecha',
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

		$criteria->compare('reserva_id',$this->reserva_id,true);
		$criteria->compare('reserva_hora_inicio',$this->reserva_hora_inicio,true);
		$criteria->compare('reserva_hora_termino',$this->reserva_hora_termino,true);
		$criteria->compare('reserva_fecha',$this->reserva_fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}