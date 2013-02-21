<?php
/* @var $this DiaController */
/* @var $data Dia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dia_id), array('view', 'id'=>$data->dia_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dia_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->dia_nombre); ?>
	<br />


</div>