<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */

$this->breadcrumbs=array(
	'Profesional Especialidads'=>array('index'),
	$model->profesional_especialidad_id=>array('view','id'=>$model->profesional_especialidad_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProfesionalEspecialidad', 'url'=>array('index')),
	array('label'=>'Create ProfesionalEspecialidad', 'url'=>array('create')),
	array('label'=>'View ProfesionalEspecialidad', 'url'=>array('view', 'id'=>$model->profesional_especialidad_id)),
	array('label'=>'Manage ProfesionalEspecialidad', 'url'=>array('admin')),
);
?>

<h1>Update ProfesionalEspecialidad <?php echo $model->profesional_especialidad_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>