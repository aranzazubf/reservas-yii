<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_rut'); ?>
		<?php echo $form->textField($model,'usuario_rut'); ?>
		<?php echo $form->error($model,'usuario_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_dv'); ?>
		<?php echo $form->textField($model,'usuario_dv',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'usuario_dv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_nombre'); ?>
		<?php echo $form->textField($model,'usuario_nombre',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_ape_paterno'); ?>
		<?php echo $form->textField($model,'usuario_ape_paterno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_ape_paterno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_ape_materno'); ?>
		<?php echo $form->textField($model,'usuario_ape_materno',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_ape_materno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_email'); ?>
		<?php echo $form->textField($model,'usuario_email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usuario_password'); ?>
		<?php echo $form->textField($model,'usuario_password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'usuario_password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->