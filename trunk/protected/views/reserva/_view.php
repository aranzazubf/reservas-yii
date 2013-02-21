<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reserva_id), array('view', 'id'=>$data->reserva_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_intervalo_profesional_id')); ?>:</b>
	<?php echo CHtml::encode($data->dia_intervalo_profesional_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_id); ?>
	<br />


</div>