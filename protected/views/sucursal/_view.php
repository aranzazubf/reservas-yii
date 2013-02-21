<?php
/* @var $this SucursalController */
/* @var $data Sucursal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sucursal_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sucursal_id), array('view', 'id'=>$data->sucursal_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sucursal_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->sucursal_nombre); ?>
	<br />


</div>