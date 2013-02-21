<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'profesional_especialidad_id'); ?>
		<?php echo $form->textField($model,'profesional_especialidad_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_id'); ?>
		<?php echo $form->textField($model,'profesional_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'especialidad_id'); ?>
		<?php echo $form->textField($model,'especialidad_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->