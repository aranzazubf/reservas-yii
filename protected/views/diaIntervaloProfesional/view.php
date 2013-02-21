<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $model DiaIntervaloProfesional */

$this->breadcrumbs=array(
	'Dia Intervalo Profesionals'=>array('index'),
	$model->dia_intervalo_profesional_id,
);

$this->menu=array(
	array('label'=>'List DiaIntervaloProfesional', 'url'=>array('index')),
	array('label'=>'Create DiaIntervaloProfesional', 'url'=>array('create')),
	array('label'=>'Update DiaIntervaloProfesional', 'url'=>array('update', 'id'=>$model->dia_intervalo_profesional_id)),
	array('label'=>'Delete DiaIntervaloProfesional', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dia_intervalo_profesional_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DiaIntervaloProfesional', 'url'=>array('admin')),
);
?>

<h1>View DiaIntervaloProfesional #<?php echo $model->dia_intervalo_profesional_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dia_intervalo_profesional_id',
                array(
                    'label' => 'Intervalo',
                    'type' => 'raw',
                    'value' => $model->intervalo->intervalo_inicio . " - " . $model->intervalo->intervalo_termino
                ),
                array(
                    'label' => $model->intervalo->getAttributeLabel('dia_nombre'),
                    'type' => 'raw',
                    'value' => $model->dia->dia_nombre
                ),
                array(
                    'label' => $model->profesional->getAttributeLabel('profesional_nombre'),
                    'type' => 'raw',
                    'value' => $model->profesional->profesional_nombre . " " . $model->profesional->profesional_apellido_paterno . " " . $model->profesional->profesional_apellido_materno
                ),
                array(
                    'label' => $model->sucursal->getAttributeLabel('sucursal_nombre'),
                    'type' => 'raw',
                    'value' => $model->sucursal->sucursal_nombre
                )
	),
)); ?>
