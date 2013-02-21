<?php
/* @var $this IntervaloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Intervalos',
);

$this->menu=array(
	array('label'=>'Create Intervalo', 'url'=>array('create')),
	array('label'=>'Manage Intervalo', 'url'=>array('admin')),
);
?>

<h1>Intervalos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
