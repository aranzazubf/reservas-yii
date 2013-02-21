<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $usuario_id
 * @property integer $usuario_rut
 * @property string $usuario_dv
 * @property string $usuario_nombre
 * @property string $usuario_ape_paterno
 * @property string $usuario_ape_materno
 * @property string $usuario_email
 * @property string $usuario_password
 *
 * The followings are the available model relations:
 * @property Reserva[] $reservas
 */
class Usuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuario the static model class
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
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuario_rut', 'numerical', 'integerOnly'=>true),
			array('usuario_dv', 'length', 'max'=>1),
			array('usuario_nombre, usuario_ape_paterno, usuario_ape_materno, usuario_email, usuario_password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('usuario_id, usuario_rut, usuario_dv, usuario_nombre, usuario_ape_paterno, usuario_ape_materno, usuario_email, usuario_password', 'safe', 'on'=>'search'),
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
			'reservas' => array(self::HAS_MANY, 'Reserva', 'usuario_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'usuario_id' => 'Usuario',
			'usuario_rut' => 'Usuario Rut',
			'usuario_dv' => 'Usuario Dv',
			'usuario_nombre' => 'Usuario Nombre',
			'usuario_ape_paterno' => 'Usuario Ape Paterno',
			'usuario_ape_materno' => 'Usuario Ape Materno',
			'usuario_email' => 'Usuario Email',
			'usuario_password' => 'Usuario Password',
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

		$criteria->compare('usuario_id',$this->usuario_id,true);
		$criteria->compare('usuario_rut',$this->usuario_rut);
		$criteria->compare('usuario_dv',$this->usuario_dv,true);
		$criteria->compare('usuario_nombre',$this->usuario_nombre,true);
		$criteria->compare('usuario_ape_paterno',$this->usuario_ape_paterno,true);
		$criteria->compare('usuario_ape_materno',$this->usuario_ape_materno,true);
		$criteria->compare('usuario_email',$this->usuario_email,true);
		$criteria->compare('usuario_password',$this->usuario_password,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}