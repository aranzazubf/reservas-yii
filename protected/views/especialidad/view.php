<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */

$this->breadcrumbs=array(
	'Especialidads'=>array('index'),
	$model->especialidad_id,
);

$this->menu=array(
	array('label'=>'List Especialidad', 'url'=>array('index')),
	array('label'=>'Create Especialidad', 'url'=>array('create')),
	array('label'=>'Update Especialidad', 'url'=>array('update', 'id'=>$model->especialidad_id)),
	array('label'=>'Delete Especialidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->especialidad_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Especialidad', 'url'=>array('admin')),
);
?>

<h1>View Especialidad #<?php echo $model->especialidad_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'especialidad_id',
		'especialidad_nombre',
		'especialidad_descripcion',
	),
)); ?>
