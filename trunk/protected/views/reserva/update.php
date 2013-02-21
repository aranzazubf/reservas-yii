<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->reserva_id=>array('view','id'=>$model->reserva_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Reserva', 'url'=>array('index')),
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'View Reserva', 'url'=>array('view', 'id'=>$model->reserva_id)),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);
?>

<h1>Update Reserva <?php echo $model->reserva_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>