<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        $this->layout = 'sitio';
        
        $especialidades = CHtml::listData(Especialidad::model()->findAll(), 'especialidad_id', 'especialidad_nombre');
        
        $buscarProfesionalApellidoModel = new BuscarProfesionalApellido;
        $buscarProfesionalEspecialidadModel = new BuscarProfesionalEspecialidad;
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index',
                array(
                    'buscarProfesionalApellidoModel' => $buscarProfesionalApellidoModel,
                    'buscarProfesionalEspecialidadModel' => $buscarProfesionalEspecialidadModel,
                    'especialidades' => $especialidades
                ));
    }
    
    public function actionListarProfesionales() {
        $this->layout = 'sitio';
        
        if(isset($_POST['BuscarProfesionalApellido'])) {
            $profesionales = Profesional::model()->findALl("profesional_apellido_paterno LIKE '%" . $_POST['BuscarProfesionalApellido']['apellido'] . "%' ");
            
            $this->render('listarProfesionales',
                    array(
                        'profesionales' => $profesionales
                    ));
        } elseif(isset($_POST['BuscarProfesionalEspecialidad'])) {
            $profesionales = Profesional::model()->with('profesionalEspecialidades')->findALl('profesionalEspecialidades.especialidad_id = ' . $_POST['BuscarProfesionalEspecialidad']['especialidad']);
            
            $this->render('listarProfesionales',
                    array(
                        'profesionales' => $profesionales
                    ));
        } else {
            throw new CHttpException('no se puede mostrar la página solicitada.');
        }
    }
    
    public function actionAgendaProfesional() {
        if(isset($_POST['DatosAgenda'])) {
            $this->layout = 'sitio';
            $profesional = Profesional::model()->findByPk($_POST['DatosAgenda']['profesional-id']);
            
            $intervalos = DiaIntervaloProfesional::getIntervalosProfesionalSucursalDia(isset($_POST['DatosAgenda']['dia-id']) ? $_POST['DatosAgenda']['dia-id'] : (date('N')), $_POST['DatosAgenda']['profesional-id'], $_POST['DatosAgenda']['sucursal-id']);
            //echo "<pre>"; print_r($intervalos); exit();
            $this->render('agendaProfesional',
                    array(
                        'profesional' => $profesional,
                        'intervalos' => $intervalos
                    ));
        } else {
            throw new CHttpException('no se puede mostrar la página solicitada.');
        }
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    public function actionPruebaCalendario() {
        $this->layout = 'sitio';

        $this->render('pruebaCalendario');
    }
    
    public function actionBuscarProfesional() {
        $this->layout = 'sitio';
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}