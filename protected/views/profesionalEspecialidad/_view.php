<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $data ProfesionalEspecialidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_especialidad_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->profesional_especialidad_id), array('view', 'id'=>$data->profesional_especialidad_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_id')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('especialidad_id')); ?>:</b>
	<?php echo CHtml::encode($data->especialidad_id); ?>
	<br />


</div>