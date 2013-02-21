<?php
/* @var $this IntervaloController */
/* @var $model Intervalo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'intervalo_id'); ?>
		<?php echo $form->textField($model,'intervalo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervalo_inicio'); ?>
		<?php echo $form->textField($model,'intervalo_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervalo_termino'); ?>
		<?php echo $form->textField($model,'intervalo_termino'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->