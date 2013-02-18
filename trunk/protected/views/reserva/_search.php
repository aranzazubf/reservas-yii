<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'reserva_id'); ?>
		<?php echo $form->textField($model,'reserva_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserva_hora_inicio'); ?>
		<?php echo $form->textField($model,'reserva_hora_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserva_hora_termino'); ?>
		<?php echo $form->textField($model,'reserva_hora_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserva_fecha'); ?>
		<?php echo $form->textField($model,'reserva_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->