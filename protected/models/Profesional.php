<?php

/**
 * This is the model class for table "profesional".
 *
 * The followings are the available columns in table 'profesional':
 * @property string $profesional_id
 * @property integer $profesional_rut
 * @property string $profesional_dv
 * @property string $profesional_nombre
 * @property string $profesional_apellido_paterno
 * @property string $profesional_apellido_materno
 * @property string $profesional_email
 * @property string $profesional_password
 *
 * The followings are the available model relations:
 * @property DiaIntervaloProfesional[] $diaIntervaloProfesionals
 * @property ProfesionalEspecialidad[] $profesionalEspecialidads
 */
class Profesional extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Profesional the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'profesional';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('profesional_rut', 'numerical', 'integerOnly' => true),
            array('profesional_dv', 'length', 'max' => 1),
            array('profesional_nombre, profesional_apellido_paterno, profesional_apellido_materno, profesional_email, profesional_password', 'length', 'max' => 255),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('profesional_id, profesional_rut, profesional_dv, profesional_nombre, profesional_apellido_paterno, profesional_apellido_materno, profesional_email, profesional_password', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'diaIntervaloProfesionales' => array(self::HAS_MANY, 'DiaIntervaloProfesional', 'profesional_id'),
            'profesionalEspecialidades' => array(self::HAS_MANY, 'ProfesionalEspecialidad', 'profesional_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'profesional_id' => 'Profesional',
            'profesional_rut' => 'Profesional Rut',
            'profesional_dv' => 'Profesional Dv',
            'profesional_nombre' => 'Profesional Nombre',
            'profesional_apellido_paterno' => 'Profesional Apellido Paterno',
            'profesional_apellido_materno' => 'Profesional Apellido Materno',
            'profesional_email' => 'Profesional Email',
            'profesional_password' => 'Profesional Password',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search() {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('profesional_id', $this->profesional_id, true);
        $criteria->compare('profesional_rut', $this->profesional_rut);
        $criteria->compare('profesional_dv', $this->profesional_dv, true);
        $criteria->compare('profesional_nombre', $this->profesional_nombre, true);
        $criteria->compare('profesional_apellido_paterno', $this->profesional_apellido_paterno, true);
        $criteria->compare('profesional_apellido_materno', $this->profesional_apellido_materno, true);
        $criteria->compare('profesional_email', $this->profesional_email, true);
        $criteria->compare('profesional_password', $this->profesional_password, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    /*
     * Retorna un string con el nombre completo del profesional
     * 
     * @return string
     */
    public function getNombreCompleto() {
        return $this->profesional_nombre . " " . $this->profesional_apellido_paterno . " " . $this->profesional_apellido_materno;
    }

}