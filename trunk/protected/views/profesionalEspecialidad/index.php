<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Profesional Especialidads',
);

$this->menu=array(
	array('label'=>'Create ProfesionalEspecialidad', 'url'=>array('create')),
	array('label'=>'Manage ProfesionalEspecialidad', 'url'=>array('admin')),
);
?>

<h1>Profesional Especialidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
