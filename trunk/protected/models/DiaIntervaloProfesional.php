<?php

/**
 * This is the model class for table "dia_intervalo_profesional".
 *
 * The followings are the available columns in table 'dia_intervalo_profesional':
 * @property integer $dia_intervalo_profesional_id
 * @property integer $intervalo_id
 * @property integer $dia_id
 * @property integer $profesional_id
 * @property integer $sucursal_id
 *
 * The followings are the available model relations:
 * @property Intervalo $intervalo
 * @property Dia $dia
 * @property Profesional $profesional
 * @property Reserva[] $reservas
 */
class DiaIntervaloProfesional extends CActiveRecord {

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return DiaIntervaloProfesional the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'dia_intervalo_profesional';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('intervalo_id, dia_id, sucursal_id', 'numerical', 'integerOnly' => true),
            array('profesional_id', 'length', 'max' => 20),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('dia_intervalo_profesional_id, intervalo_id, dia_id, profesional_id, sucursal_id', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'intervalo' => array(self::BELONGS_TO, 'Intervalo', 'intervalo_id'),
            'dia' => array(self::BELONGS_TO, 'Dia', 'dia_id'),
            'profesional' => array(self::BELONGS_TO, 'Profesional', 'profesional_id'),
            'sucursal' => array(self::BELONGS_TO, 'Sucursal', 'sucursal_id'),
            'reservas' => array(self::HAS_MANY, 'Reserva', 'dia_intervalo_profesional_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'dia_intervalo_profesional_id' => 'ID',
            'intervalo_id' => 'Intervalo',
            'dia_id' => 'Dia',
            'profesional_id' => 'Profesional',
            'sucursal_id' => 'Sucursal'
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

        $criteria->compare('dia_intervalo_profesional_id', $this->dia_intervalo_profesional_id, true);
        $criteria->compare('intervalo_id', $this->intervalo_id);
        $criteria->compare('dia_id', $this->dia_id);
        $criteria->compare('profesional_id', $this->profesional_id, true);
        $criteria->compare('sucursal_id', $this->sucursal_id, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    
    public static function getSucursalesProfesionalSelect($idProfesional) {
        $sql = "
        SELECT
                dip.profesional_id,
                dip.sucursal_id,
                a.sucursal_nombre
        FROM
                dia_intervalo_profesional dip
        INNER JOIN
                sucursal a
                        ON dip.sucursal_id = a.sucursal_id
        WHERE
                dip.profesional_id = " . $idProfesional . " 
        GROUP BY
                dip.profesional_id,
                dip.sucursal_id,
                a.sucursal_nombre";
        
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        $sucursales = $command->queryAll();
        //echo "<pre>"; print_r($sucursales); exit();
        $selectSucursales = "<select name='DatosAgenda[sucursal-id]'>";
        foreach ($sucursales as $sucursal) {
            $selectSucursales .= "<option value='" . $sucursal['sucursal_id'] . "'>" . $sucursal['sucursal_nombre'] . "</option>";
        }
        $selectSucursales .= "</select>";
        //echo $selectSucursales; exit();
        return $selectSucursales;
    }
    
    public static function getIntervalosProfesionalSucursalDia($diaId, $profesionalId, $sucursalId) {
        $sql = "
            SELECT
                    dip.dia_intervalo_profesional_id,
                    dip.intervalo_id,
                    dip.dia_id,
                    dip.profesional_id,
                    dip.sucursal_id,
                    CONCAT(i.intervalo_inicio, ' - ', i.intervalo_termino) AS intervalo
            FROM
                    dia_intervalo_profesional dip
            INNER JOIN
                    intervalo i
                            ON dip.intervalo_id = i.intervalo_id
            WHERE
                    dip.dia_id = " . $diaId . " AND
                    dip.profesional_id = " . $profesionalId . " AND
                    dip.sucursal_id = " . $sucursalId . " ";
        
        return $intervalos = Yii::app()->db->createCommand($sql)->queryAll();
    }

}