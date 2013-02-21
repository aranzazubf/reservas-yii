<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesional-especialidad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_id'); ?>
		<?php echo $form->textField($model,'profesional_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'profesional_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad_id'); ?>
		<?php echo $form->textField($model,'especialidad_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'especialidad_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->