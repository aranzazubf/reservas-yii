<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $model DiaIntervaloProfesional */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dia-intervalo-profesional-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'intervalo_id'); ?>
                <?php echo $form->dropDownList($model, 'intervalo_id', $intHelper); ?>
		<?php //echo $form->textField($model,'intervalo_id'); ?>
		<?php echo $form->error($model,'intervalo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia_id'); ?>
                <?php echo $form->dropDownList($model, 'dia_id', CHtml::listData(Dia::model()->findAll(), 'dia_id', 'dia_nombre')); ?>
		<?php //echo $form->textField($model,'dia_id'); ?>
		<?php echo $form->error($model,'dia_id'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'sucursal_id'); ?>
                <?php echo $form->dropDownList($model, 'sucursal_id', CHtml::listData(Sucursal::model()->findAll(), 'sucursal_id', 'sucursal_nombre')); ?>
		<?php //echo $form->textField($model,'dia_id'); ?>
		<?php echo $form->error($model,'sucursal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'profesional_id'); ?>
                <?php echo $form->dropDownList($model, 'profesional_id', $proHelper); ?>
		<?php //echo $form->textField($model,'profesional_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'profesional_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->