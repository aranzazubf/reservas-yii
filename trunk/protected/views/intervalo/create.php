<?php
/* @var $this IntervaloController */
/* @var $model Intervalo */

$this->breadcrumbs=array(
	'Intervalos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Intervalo', 'url'=>array('index')),
	array('label'=>'Manage Intervalo', 'url'=>array('admin')),
);
?>

<h1>Create Intervalo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>