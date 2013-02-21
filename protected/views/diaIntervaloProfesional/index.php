<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dia Intervalo Profesionals',
);

$this->menu=array(
	array('label'=>'Create DiaIntervaloProfesional', 'url'=>array('create')),
	array('label'=>'Manage DiaIntervaloProfesional', 'url'=>array('admin')),
);
?>

<h1>Dia Intervalo Profesionals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
