<?php
/* @var $this ProfesionalController */
/* @var $data Profesional */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->profesional_id), array('view', 'id'=>$data->profesional_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_rut')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_dv')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_dv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_apellido_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_apellido_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_apellido_materno')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_apellido_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_email')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_password')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_password); ?>
	<br />

	*/ ?>

</div>