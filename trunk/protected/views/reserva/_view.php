<?php
/* @var $this ReservaController */
/* @var $data Reserva */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->reserva_id), array('view', 'id'=>$data->reserva_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_hora_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_hora_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_hora_termino')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_hora_termino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_fecha')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_fecha); ?>
	<br />


</div>