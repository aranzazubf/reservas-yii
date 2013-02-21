<?php
/* @var $this IntervaloController */
/* @var $model Intervalo */

$this->breadcrumbs=array(
	'Intervalos'=>array('index'),
	$model->intervalo_id=>array('view','id'=>$model->intervalo_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Intervalo', 'url'=>array('index')),
	array('label'=>'Create Intervalo', 'url'=>array('create')),
	array('label'=>'View Intervalo', 'url'=>array('view', 'id'=>$model->intervalo_id)),
	array('label'=>'Manage Intervalo', 'url'=>array('admin')),
);
?>

<h1>Update Intervalo <?php echo $model->intervalo_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>