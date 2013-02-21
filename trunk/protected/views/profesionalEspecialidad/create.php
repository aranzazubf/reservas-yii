<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */

$this->breadcrumbs=array(
	'Profesional Especialidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProfesionalEspecialidad', 'url'=>array('index')),
	array('label'=>'Manage ProfesionalEspecialidad', 'url'=>array('admin')),
);
?>

<h1>Create ProfesionalEspecialidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>