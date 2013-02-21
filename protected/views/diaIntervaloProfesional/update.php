<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $model DiaIntervaloProfesional */

$this->breadcrumbs=array(
	'Dia Intervalo Profesionals'=>array('index'),
	$model->dia_intervalo_profesional_id=>array('view','id'=>$model->dia_intervalo_profesional_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiaIntervaloProfesional', 'url'=>array('index')),
	array('label'=>'Create DiaIntervaloProfesional', 'url'=>array('create')),
	array('label'=>'View DiaIntervaloProfesional', 'url'=>array('view', 'id'=>$model->dia_intervalo_profesional_id)),
	array('label'=>'Manage DiaIntervaloProfesional', 'url'=>array('admin')),
);
?>

<h1>Update DiaIntervaloProfesional <?php echo $model->dia_intervalo_profesional_id; ?></h1>

<?php if(Yii::app()->user->hasFlash('errorIntervaloExiste')):?>
    <div class="error">
        <?php echo Yii::app()->user->getFlash('errorIntervaloExiste'); ?>
    </div>
<?php endif; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'intHelper' => $intHelper, 'proHelper' => $proHelper)); ?>