<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->especialidad_id=>array('view','id'=>$model->especialidad_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'View Especialidad', 'url'=>array('view', 'id'=>$model->especialidad_id)),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>Update Especialidad <?php echo $model->especialidad_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>