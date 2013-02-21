<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->usuario_id), array('view', 'id'=>$data->usuario_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_rut')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_dv')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_dv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ape_paterno')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ape_paterno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_ape_materno')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_ape_materno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_email')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('usuario_password')); ?>:</b>
	<?php echo CHtml::encode($data->usuario_password); ?>
	<br />

	*/ ?>

</div>