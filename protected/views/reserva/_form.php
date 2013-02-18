<?php
/* @var $this ReservaController */
/* @var $model Reserva */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reserva_hora_inicio'); ?>
		<?php echo $form->textField($model,'reserva_hora_inicio'); ?>
		<?php echo $form->error($model,'reserva_hora_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserva_hora_termino'); ?>
		<?php echo $form->textField($model,'reserva_hora_termino'); ?>
		<?php echo $form->error($model,'reserva_hora_termino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reserva_fecha'); ?>
		<?php echo $form->textField($model,'reserva_fecha'); ?>
		<?php echo $form->error($model,'reserva_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->