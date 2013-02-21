<?php
/* @var $this IntervaloController */
/* @var $model Intervalo */

$this->breadcrumbs=array(
	'Intervalos'=>array('index'),
	$model->intervalo_id,
);

$this->menu=array(
	array('label'=>'List Intervalo', 'url'=>array('index')),
	array('label'=>'Create Intervalo', 'url'=>array('create')),
	array('label'=>'Update Intervalo', 'url'=>array('update', 'id'=>$model->intervalo_id)),
	array('label'=>'Delete Intervalo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->intervalo_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Intervalo', 'url'=>array('admin')),
);
?>

<h1>View Intervalo #<?php echo $model->intervalo_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'intervalo_id',
		'intervalo_inicio',
		'intervalo_termino',
	),
)); ?>
