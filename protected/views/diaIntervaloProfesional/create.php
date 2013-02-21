<?php
/* @var $this DiaIntervaloProfesionalController */
/* @var $model DiaIntervaloProfesional */

$this->breadcrumbs=array(
	'Dia Intervalo Profesionals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DiaIntervaloProfesional', 'url'=>array('index')),
	array('label'=>'Manage DiaIntervaloProfesional', 'url'=>array('admin')),
);
?>

<h1>Create DiaIntervaloProfesional</h1>

<?php if(Yii::app()->user->hasFlash('errorIntervaloExiste')):?>
    <div class="error">
        <?php echo Yii::app()->user->getFlash('errorIntervaloExiste'); ?>
    </div>
<?php endif; ?>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'intHelper' => $intHelper, 'proHelper' => $proHelper)); ?>