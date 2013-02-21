<?php
/* @var $this IntervaloController */
/* @var $model Intervalo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'intervalo-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'intervalo_inicio'); ?>
		<?php echo $form->textField($model,'intervalo_inicio'); ?>
		<?php echo $form->error($model,'intervalo_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervalo_termino'); ?>
		<?php echo $form->textField($model,'intervalo_termino'); ?>
		<?php echo $form->error($model,'intervalo_termino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->