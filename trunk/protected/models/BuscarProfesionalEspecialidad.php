<?php
/**
 * Description of BuscarProfesionalEspecialidad
 *
 * @author Oscar Cárdenas Albornoz
 */
class BuscarProfesionalEspecialidad extends CFormModel {

    var $especialidad;

    public function rules() {
        return array(
            array('especialidad', 'required', 'message' => 'Este campo es obligatorio.'),
        );
    }

    public function attributeLabels() {
        return array(
            'especialidad' => 'Especialidad',
        );
    }

}

?>
