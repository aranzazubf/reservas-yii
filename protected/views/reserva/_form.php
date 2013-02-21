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
		<?php echo $form->labelEx($model,'reserva_fecha'); ?>
		<?php echo $form->textField($model,'reserva_fecha'); ?>
		<?php echo $form->error($model,'reserva_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia_intervalo_profesional_id'); ?>
		<?php echo $form->textField($model,'dia_intervalo_profesional_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'dia_intervalo_profesional_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_id'); ?>
		<?php echo $form->textField($model,'usuario_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'usuario_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->