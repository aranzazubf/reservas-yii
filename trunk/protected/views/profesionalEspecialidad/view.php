<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */

$this->breadcrumbs=array(
	'Profesional Especialidads'=>array('index'),
	$model->profesional_especialidad_id,
);

$this->menu=array(
	array('label'=>'List ProfesionalEspecialidad', 'url'=>array('index')),
	array('label'=>'Create ProfesionalEspecialidad', 'url'=>array('create')),
	array('label'=>'Update ProfesionalEspecialidad', 'url'=>array('update', 'id'=>$model->profesional_especialidad_id)),
	array('label'=>'Delete ProfesionalEspecialidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->profesional_especialidad_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProfesionalEspecialidad', 'url'=>array('admin')),
);
?>

<h1>View ProfesionalEspecialidad #<?php echo $model->profesional_especialidad_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'profesional_especialidad_id',
		'profesional_id',
		'especialidad_id',
	),
)); ?>
