<?php

class LoginController extends Controller {

    public function actionIndex() {
        $this->layout = 'sitio';
        $model = new LoginUsuarioForm;

        $this->render('index', array(
            'model' => $model
        ));
    }
    
    public function actionValidarLogin() {
        $objUsuarioModel = new LoginUsuarioForm;
        
        if(isset($_POST['LoginUsuarioForm'])) {
            $objUsuarioModel->attributes = $_POST['LoginUsuarioForm'];
            
            if($objUsuarioModel->login()) {
                $this->redirect(array('site/index'));
            } else {
                Yii:app()->user->setFlash('errorLogin', 'El rut ingresado y/o el password son incorrectos.');
                $this->redirect(array('login/index'));
            }
        }
    }

}