<div class="titulo-h1">
    <h1>Buscar Profesional</h1>
</div>
<div class="form">
    <?php
    $formApellido = $this->beginWidget('CActiveForm', array(
        'id' => 'apellido-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'action' => CController::createUrl('site/listarProfesionales'),
    ));
    ?>

    <div class="row">
        <?php echo $formApellido->labelEx($buscarProfesionalApellidoModel, 'apellido'); ?>
<?php echo $formApellido->textField($buscarProfesionalApellidoModel, 'apellido'); ?>
<?php echo $formApellido->error($buscarProfesionalApellidoModel, 'apellido'); ?>
    </div>

    <div class="row buttons">
    <?php echo CHtml::submitButton('Buscar Profesional', array('class' => 'btn')); ?>
    </div>

<?php $this->endWidget(); ?>

    <div class="margen-20"></div>

    <?php
    $formEspecialidad = $this->beginWidget('CActiveForm', array(
        'id' => 'especialidad-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'action' => CController::createUrl('site/listarProfesionales'),
    ));
    ?>

    <div class="row">
        <?php echo $formEspecialidad->labelEx($buscarProfesionalEspecialidadModel, 'especialidad'); ?>
        <?php echo $formEspecialidad->dropDownList($buscarProfesionalEspecialidadModel, 'especialidad', $especialidades, array('empty' => 'SELECCIONE ESPECIALIDAD')); ?>
        <?php echo $formEspecialidad->error($buscarProfesionalEspecialidadModel, 'especialidad'); ?>
    </div>

    <div class="row buttons">
<?php echo CHtml::submitButton('Buscar Profesional', array('class' => 'btn')); ?>
    </div>

<?php $this->endWidget(); ?>
</div>
