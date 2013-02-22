<?php

/**
 * Description of LoginUsuarioForm
 *
 * @author Oscar Cárdenas Albornoz
 */
class LoginUsuarioForm extends CFormModel {

    public $rut;
    public $dv;
    public $password;

    /**
     * Declares the validation rules.
     * The rules state that username and password are required,
     * and password needs to be authenticated.
     */
    public function rules() {
        return array(
            array('rut, dv, password', 'required', 'message' => 'El {attribute} es obligatorio.'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels() {
        return array(
            'rut' => 'Rut',
            'dv' => 'Digito Verificador',
            'password' => 'Password'
        );
    }

    public function login() {
        $objUsuario = new Usuario;
        $usuario = $objUsuario->findAll("usuario_rut = " . $this->rut . " AND usuario_dv = '" . $this->dv . "' AND usuario_password = '" . $this->password . "' ");
        
        if(isset($usuario)) {
            return true;
        } else {
            return false;
        }
    }

}

?>
