<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->reserva_id,
);

$this->menu=array(
	array('label'=>'List Reserva', 'url'=>array('index')),
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'Update Reserva', 'url'=>array('update', 'id'=>$model->reserva_id)),
	array('label'=>'Delete Reserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->reserva_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);
?>

<h1>View Reserva #<?php echo $model->reserva_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'reserva_id',
		'reserva_fecha',
		'dia_intervalo_profesional_id',
		'usuario_id',
	),
)); ?>
