<?php
/* @var $this EspecialidadController */
/* @var $data Especialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->especialidad_id), array('view', 'id'=>$data->especialidad_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad_descripcion); ?>
	<br />


</div>