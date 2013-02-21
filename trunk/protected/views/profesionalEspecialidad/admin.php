<?php
/* @var $this ProfesionalEspecialidadController */
/* @var $model ProfesionalEspecialidad */

$this->breadcrumbs=array(
	'Profesional Especialidads'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ProfesionalEspecialidad', 'url'=>array('index')),
	array('label'=>'Create ProfesionalEspecialidad', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#profesional-especialidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Profesional Especialidads</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'profesional-especialidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'profesional_especialidad_id',
		'profesional_id',
		'especialidad_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
