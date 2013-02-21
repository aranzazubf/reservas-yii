<?php
/* @var $this EspecialidadController */
/* @var $model Especialidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'especialidad-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad_nombre'); ?>
		<?php echo $form->textField($model,'especialidad_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'especialidad_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'especialidad_descripcion'); ?>
		<?php echo $form->textField($model,'especialidad_descripcion',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'especialidad_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->