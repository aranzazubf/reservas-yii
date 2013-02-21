<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $data DiaIntervaloProfesional */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_intervalo_profesional_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dia_intervalo_profesional_id), array('view', 'id'=>$data->dia_intervalo_profesional_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervalo_id')); ?>:</b>
	<?php echo CHtml::encode($data->intervalo_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_id')); ?>:</b>
	<?php echo CHtml::encode($data->dia_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('profesional_id')); ?>:</b>
	<?php echo CHtml::encode($data->profesional_id); ?>
	<br />


</div>