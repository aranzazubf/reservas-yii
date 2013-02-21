<?php
/* @var $this ProfesionalController */
/* @var $model Profesional */

$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	$model->profesional_id=>array('view','id'=>$model->profesional_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Profesional', 'url'=>array('index')),
	array('label'=>'Create Profesional', 'url'=>array('create')),
	array('label'=>'View Profesional', 'url'=>array('view', 'id'=>$model->profesional_id)),
	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>Update Profesional <?php echo $model->profesional_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>