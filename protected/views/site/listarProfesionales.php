<div class="titulo-h1">
    <h1>Lista de Profesionales</h1>
</div>

<table class="table">
    <tr>
        <th>NOMBRE</th>
        <th>SUCURSAL</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach($profesionales as $profesional): ?>
    <form action="<?php echo CController::createUrl('site/agendaProfesional'); ?>" method="post">
    <tr>
        <td><?php echo $profesional->getNombreCompleto(); ?><input type="hidden" name="DatosAgenda[profesional-id]" value="<?php echo $profesional->profesional_id; ?>" /></td>
        <td><?php echo DiaIntervaloProfesional::getSucursalesProfesionalSelect($profesional->profesional_id); ?></td>
        <td><?php echo CHtml::submitButton('Ver Agenda', array('class' => 'btn btn-info')); ?></td>
    </tr>
    </form>
    <?php endforeach; ?>
</table>