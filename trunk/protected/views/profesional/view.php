<?php
/* @var $this ProfesionalController */
/* @var $model Profesional */

$this->breadcrumbs=array(
	'Profesionals'=>array('index'),
	$model->profesional_id,
);

$this->menu=array(
	array('label'=>'List Profesional', 'url'=>array('index')),
	array('label'=>'Create Profesional', 'url'=>array('create')),
	array('label'=>'Update Profesional', 'url'=>array('update', 'id'=>$model->profesional_id)),
	array('label'=>'Delete Profesional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->profesional_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Profesional', 'url'=>array('admin')),
);
?>

<h1>View Profesional #<?php echo $model->profesional_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'profesional_id',
		'profesional_rut',
		'profesional_dv',
		'profesional_nombre',
		'profesional_apellido_paterno',
		'profesional_apellido_materno',
		'profesional_email',
		'profesional_password',
	),
)); ?>
