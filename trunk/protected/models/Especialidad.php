<?php

/**
 * This is the model class for table "especialidad".
 *
 * The followings are the available columns in table 'especialidad':
 * @property string $especialidad_id
 * @property string $especialidad_nombre
 * @property string $especialidad_descripcion
 *
 * The followings are the available model relations:
 * @property ProfesionalEspecialidad[] $profesionalEspecialidads
 */
class Especialidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Especialidad the static model class
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
		return 'especialidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('especialidad_nombre, especialidad_descripcion', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('especialidad_id, especialidad_nombre, especialidad_descripcion', 'safe', 'on'=>'search'),
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
			'profesionalEspecialidads' => array(self::HAS_MANY, 'ProfesionalEspecialidad', 'especialidad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'especialidad_id' => 'Especialidad',
			'especialidad_nombre' => 'Especialidad Nombre',
			'especialidad_descripcion' => 'Especialidad Descripcion',
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

		$criteria->compare('especialidad_id',$this->especialidad_id,true);
		$criteria->compare('especialidad_nombre',$this->especialidad_nombre,true);
		$criteria->compare('especialidad_descripcion',$this->especialidad_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}