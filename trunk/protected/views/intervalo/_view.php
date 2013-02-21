<?php
/* @var $this IntervaloController */
/* @var $data Intervalo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervalo_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->intervalo_id), array('view', 'id'=>$data->intervalo_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervalo_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->intervalo_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervalo_termino')); ?>:</b>
	<?php echo CHtml::encode($data->intervalo_termino); ?>
	<br />


</div>