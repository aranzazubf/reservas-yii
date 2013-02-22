<?php

class DiaIntervaloProfesionalController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new DiaIntervaloProfesional;
        $intervalos = Intervalo::model()->findAll();
        $profesionales = Profesional::model()->findAll();

        $intHelper = array();
        foreach ($intervalos as $intervalo) {
            $intHelper[$intervalo->intervalo_id] = $intervalo->intervalo_inicio . " - " . $intervalo->intervalo_termino;
        }

        $proHelper = array();
        foreach ($profesionales as $profesional) {
            $proHelper[$profesional->profesional_id] = $profesional->profesional_nombre . " " . $profesional->profesional_apellido_paterno . " " . $profesional->profesional_apellido_materno;
        }
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DiaIntervaloProfesional'])) {
            if (DiaIntervaloProfesional::intervaloExiste()) {
                yii::app()->user->setFlash('errorIntervaloExiste', 'El intervalo existe');
            } else {
                $model->attributes = $_POST['DiaIntervaloProfesional'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->dia_intervalo_profesional_id));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'intHelper' => $intHelper,
            'proHelper' => $proHelper
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $intervalos = Intervalo::model()->findAll();
        $profesionales = Profesional::model()->findAll();

        $intHelper = array();
        foreach ($intervalos as $intervalo) {
            $intHelper[$intervalo->intervalo_id] = $intervalo->intervalo_inicio . " - " . $intervalo->intervalo_termino;
        }

        $proHelper = array();
        foreach ($profesionales as $profesional) {
            $proHelper[$profesional->profesional_id] = $profesional->profesional_nombre . " " . $profesional->profesional_apellido_paterno . " " . $profesional->profesional_apellido_materno;
        }

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['DiaIntervaloProfesional'])) {
            $sql = "
            SELECT
                    *
            FROM
                    dia_intervalo_profesional
            WHERE
                    intervalo_id = " . $_POST['DiaIntervaloProfesional']['intervalo_id'] . "
                    AND dia_id = " . $_POST['DiaIntervaloProfesional']['dia_id'] . "
                    AND profesional_id = " . $_POST['DiaIntervaloProfesional']['profesional_id'] . "
                    AND sucursal_id = " . $_POST['DiaIntervaloProfesional']['sucursal_id'] . " ";

            $objIntervalo = DiaIntervaloProfesional::model()->findBySql($sql);
            //echo "<pre>"; print_r($objIntervalo); echo "</pre>"; exit();
            if (isset($objIntervalo)) {
                yii::app()->user->setFlash('errorIntervaloExiste', 'El intervalo existe');
            } else {
                $model->attributes = $_POST['DiaIntervaloProfesional'];
                if ($model->save())
                    $this->redirect(array('view', 'id' => $model->dia_intervalo_profesional_id));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'intHelper' => $intHelper,
            'proHelper' => $proHelper
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('DiaIntervaloProfesional');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new DiaIntervaloProfesional('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['DiaIntervaloProfesional']))
            $model->attributes = $_GET['DiaIntervaloProfesional'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return DiaIntervaloProfesional the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = DiaIntervaloProfesional::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param DiaIntervaloProfesional $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'dia-intervalo-profesional-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
