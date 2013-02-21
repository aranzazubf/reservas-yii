<?php
/* @var $this ProfesionalController */
/* @var $model Profesional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'profesional_id'); ?>
		<?php echo $form->textField($model,'profesional_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_rut'); ?>
		<?php echo $form->textField($model,'profesional_rut'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_dv'); ?>
		<?php echo $form->textField($model,'profesional_dv',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_nombre'); ?>
		<?php echo $form->textField($model,'profesional_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_apellido_paterno'); ?>
		<?php echo $form->textField($model,'profesional_apellido_paterno',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_apellido_materno'); ?>
		<?php echo $form->textField($model,'profesional_apellido_materno',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_email'); ?>
		<?php echo $form->textField($model,'profesional_email',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->