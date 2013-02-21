<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $model DiaIntervaloProfesional */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dia_intervalo_profesional_id'); ?>
		<?php echo $form->textField($model,'dia_intervalo_profesional_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervalo_id'); ?>
		<?php echo $form->textField($model,'intervalo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia_id'); ?>
		<?php echo $form->textField($model,'dia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'profesional_id'); ?>
		<?php echo $form->textField($model,'profesional_id',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->