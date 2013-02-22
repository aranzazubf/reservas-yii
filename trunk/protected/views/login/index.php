<div class="titulo-h1">
    <h1>Ingreso de Usuarios</h1>
</div>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'login-usuario-form',
        'enableClientValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
        'action' => CController::createUrl('login/validarLogin'),
    ));
    ?>
    
    <?php if(Yii::app()->user->hasFlash('errorLogin')):?>
    <div class="error">
        <?php echo Yii::app()->user->getFlash('errorLogin'); ?>
    </div>
    <?php endif; ?>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'rut'); ?>
        <?php echo $form->textField($model, 'rut', array('size' => 8)); ?> - <?php echo $form->textField($model, 'dv', array('size' => 1)); ?><?php echo $form->error($model, 'dv'); ?>
        <?php echo $form->error($model, 'rut'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array()); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    
    <div class="row buttons">
        <?php echo CHtml::submitButton('Iniciar Sesión', array('class' => 'btn')); ?>
    </div>

    <?php $this->endWidget(); ?>
