<?php

/**
 * This is the model class for table "profesional_especialidad".
 *
 * The followings are the available columns in table 'profesional_especialidad':
 * @property string $profesional_especialidad_id
 * @property string $profesional_id
 * @property string $especialidad_id
 *
 * The followings are the available model relations:
 * @property Especialidad $especialidad
 * @property Profesional $profesional
 */
class ProfesionalEspecialidad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProfesionalEspecialidad the static model class
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
		return 'profesional_especialidad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('profesional_id, especialidad_id', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('profesional_especialidad_id, profesional_id, especialidad_id', 'safe', 'on'=>'search'),
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
			'especialidad' => array(self::BELONGS_TO, 'Especialidad', 'especialidad_id'),
			'profesional' => array(self::BELONGS_TO, 'Profesional', 'profesional_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'profesional_especialidad_id' => 'Profesional Especialidad',
			'profesional_id' => 'Profesional',
			'especialidad_id' => 'Especialidad',
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

		$criteria->compare('profesional_especialidad_id',$this->profesional_especialidad_id,true);
		$criteria->compare('profesional_id',$this->profesional_id,true);
		$criteria->compare('especialidad_id',$this->especialidad_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}