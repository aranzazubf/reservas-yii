<?php

/**
 * This is the model class for table "reserva".
 *
 * The followings are the available columns in table 'reserva':
 * @property string $reserva_id
 * @property string $reserva_fecha
 * @property string $dia_intervalo_profesional_id
 * @property string $usuario_id
 *
 * The followings are the available model relations:
 * @property DiaIntervaloProfesional $diaIntervaloProfesional
 * @property Usuario $usuario
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
			array('dia_intervalo_profesional_id, usuario_id', 'length', 'max'=>20),
			array('reserva_fecha', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('reserva_id, reserva_fecha, dia_intervalo_profesional_id, usuario_id', 'safe', 'on'=>'search'),
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
			'diaIntervaloProfesional' => array(self::BELONGS_TO, 'DiaIntervaloProfesional', 'dia_intervalo_profesional_id'),
			'usuario' => array(self::BELONGS_TO, 'Usuario', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'reserva_id' => 'Reserva',
			'reserva_fecha' => 'Reserva Fecha',
			'dia_intervalo_profesional_id' => 'Dia Intervalo Profesional',
			'usuario_id' => 'Usuario',
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
		$criteria->compare('reserva_fecha',$this->reserva_fecha,true);
		$criteria->compare('dia_intervalo_profesional_id',$this->dia_intervalo_profesional_id,true);
		$criteria->compare('usuario_id',$this->usuario_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}