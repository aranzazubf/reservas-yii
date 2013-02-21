<?php
/* @var $this DiaController */
/* @var $model Dia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'dia_id'); ?>
		<?php echo $form->textField($model,'dia_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dia_nombre'); ?>
		<?php echo $form->textField($model,'dia_nombre',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->