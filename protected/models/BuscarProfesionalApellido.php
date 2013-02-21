<?php
/**
 * Description of BuscarProfesionalApellido
 *
 * @author Oscar Cárdenas Albornoz
 */
class BuscarProfesionalApellido extends CFormModel {

    public $apellido;

    public function rules() {
        return array(
            array('apellido', 'required', 'message' => 'Este campo es obligatorio.'),
        );
    }

    public function attributeLabels() {
        return array(
            'apellido' => 'Apellido Profesional',
        );
    }

}

?>
