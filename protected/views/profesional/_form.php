<?php
/* @var $this ProfesionalController */
/* @var $model Profesional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'profesional-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_rut'); ?>
		<?php echo $form->textField($model,'profesional_rut'); ?>
		<?php echo $form->error($model,'profesional_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_dv'); ?>
		<?php echo $form->textField($model,'profesional_dv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'profesional_dv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_nombre'); ?>
		<?php echo $form->textField($model,'profesional_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profesional_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_apellido_paterno'); ?>
		<?php echo $form->textField($model,'profesional_apellido_paterno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profesional_apellido_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_apellido_materno'); ?>
		<?php echo $form->textField($model,'profesional_apellido_materno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profesional_apellido_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_email'); ?>
		<?php echo $form->textField($model,'profesional_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profesional_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_password'); ?>
		<?php echo $form->textField($model,'profesional_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'profesional_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->