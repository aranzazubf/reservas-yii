<div class="titulo-h1">
    <h1>Agenda Profesional</h1>
</div>
<?php $fecha = isset($_POST['DatosAgenda']['fecha-seleccionada']) ? new DateTime($_POST['DatosAgenda']['fecha-seleccionada']) : new DateTime(date('Y/m/d')); ?>
<?php $fechaSeleccionada = isset($_POST['DatosAgenda']['fecha-seleccionada']) ? new DateTime($_POST['DatosAgenda']['fecha-seleccionada']) : new DateTime(date('Y/m/d')); ?>
<?php $fechaHoy = new DateTime(date('Y/m/d')); ?>
<?php $intervalo = $fechaHoy->diff($fechaSeleccionada); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#s-sucursal-id').on('change', function() {
            $("#sucursales-profesional").val($(this).val());
            $("#frm-agenda-profesional").submit();
        });
    
        $("#calendario").datepicker({
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            minDate: new Date(),
            dateFormat: "yy/mm/dd",
            firstDay: 1,
            defaultDate: <?php echo $intervalo->format('%R%a'); ?>,
            onSelect: function(_fecha, _objDate) {
                $("#dia-id").val(new Date(_fecha).getDay());
                $("#fecha-seleccionada").val(_fecha);
                $("#frm-agenda-profesional").submit();
            }
        });
    });
</script>

<div class="margen-10"></div>
<form id="frm-agenda-profesional" name="" method="post" action="">
    <input type="hidden" id="sucursales-profesional" name="DatosAgenda[sucursal-id]" value="<?php echo $_POST['DatosAgenda']['sucursal-id']; ?>" />
    <input type="hidden" id="profesional-id" name="DatosAgenda[profesional-id]" value="<?php echo $_POST['DatosAgenda']['profesional-id']; ?>" />
    <input type="hidden" id="dia-id" name="DatosAgenda[dia-id]" value="<?php echo isset($_POST['DatosAgenda']['dia-id']) ? $_POST['DatosAgenda']['dia-id'] : date('N'); ?>" />
    <input type="hidden" id="fecha-seleccionada" name="DatosAgenda[fecha-seleccionada]" value="<?php echo isset($_POST['DatosAgenda']['fecha-seleccionada']) ? $_POST['DatosAgenda']['fecha-seleccionada'] : date('Y/m/d'); ?>" />
</form>

<div></div>
<table>
    <tr>
        <td>
            <div id="calendario"></div>
        </td><td style="padding-left: 30px;">
            <table class="table">
                <tr>
                    <th>Profesional:</th>
                    <td><?php echo $profesional->getNombreCompleto(); ?></td>
                </tr>
                <tr style="border-bottom: 1px solid #dddddd;">
                    <th>Fecha Seleccionada:</th>
                    <td><?php echo $fecha->format('d/m/Y'); ?></td>
                </tr>
                <tr style="border-bottom: 1px solid #dddddd;">
                    <th>Sucursal:</th>
                    <td>
                        <select id="s-sucursal-id" name="DatosAgenda[sucursal-id]">
                            <?php foreach($sucursalesProfesional as $sucursal): ?>
                            <?php if($sucursal['sucursal_id'] == $_POST['DatosAgenda']['sucursal-id']): ?>
                            <option selected="selected" value="<?php echo $sucursal['sucursal_id']; ?>"><?php echo $sucursal['sucursal_nombre']; ?></option>
                            <?php else: ?>
                            <option value="<?php echo $sucursal['sucursal_id']; ?>"><?php echo $sucursal['sucursal_nombre']; ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
            </table>
            
            <table class="table">
                <tr>
                    <th>HORA</th>
                    <th>ESTADO</th>
                </tr>
                <?php foreach($intervalos as $intervalo): ?>
                <?php if(in_array($intervalo['dia_intervalo_profesional_id'], $reservas)): ?>
                <tr style="background-color: #F8C4C4; text-decoration: line-through;">
                    <td style="color: #D76A6A; font-weight: bold;"><?php echo $intervalo['intervalo']; ?></td>
                    <td style="color: #D76A6A;">Reservada</td>
                </tr>
                <?php else: ?>
                <form name="form-reservar-hora" method="post" action="<?php CController::createUrl('site/reservarHora'); ?>">
                    <input type="hidden" value="<?php echo $intervalo['dia_intervalo_profesional_id']; ?>" />
                <tr>
                    <th style=""><?php echo $intervalo['intervalo']; ?></th>
                    <td>
                        <?php echo CHtml::link('Reservar', 'javascript:;', array('class' => 'btn btn-info')); ?>
                    </td>
                </tr>
                </form>
                <?php endif; ?>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
</table>