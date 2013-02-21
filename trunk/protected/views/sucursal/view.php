<?php
/* @var $this SucursalController */
/* @var $model Sucursal */

$this->breadcrumbs=array(
	'Sucursals'=>array('index'),
	$model->sucursal_id,
);

$this->menu=array(
	array('label'=>'List Sucursal', 'url'=>array('index')),
	array('label'=>'Create Sucursal', 'url'=>array('create')),
	array('label'=>'Update Sucursal', 'url'=>array('update', 'id'=>$model->sucursal_id)),
	array('label'=>'Delete Sucursal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sucursal_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sucursal', 'url'=>array('admin')),
);
?>

<h1>View Sucursal #<?php echo $model->sucursal_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sucursal_id',
		'sucursal_nombre',
	),
)); ?>
