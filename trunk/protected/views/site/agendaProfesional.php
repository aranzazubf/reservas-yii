<div class="titulo-h1">
    <h1>Agenda Profesional</h1>
</div>
<?php $fecha = isset($_POST['DatosAgenda']['fecha-seleccionada']) ? new DateTime($_POST['DatosAgenda']['fecha-seleccionada']) : new DateTime(date('Y/m/d')); ?>
<?php $fechaSeleccionada = isset($_POST['DatosAgenda']['fecha-seleccionada']) ? new DateTime($_POST['DatosAgenda']['fecha-seleccionada']) : new DateTime(date('Y/m/d')); ?>
<?php $fechaHoy = new DateTime(date('Y/m/d')); ?>
<?php $intervalo = $fechaHoy->diff($fechaSeleccionada); ?>

<script type="text/javascript">
    $(document).ready(function() {
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
                //alert($("#dia-id").val());
                $("#frm-agenda-profesional").submit();
                //alert("ID Sucursal: " + $("#sucursales-profesional").val() + "\n" + "ID Profesional: " + $("#profesional-id").val() + "Día N°: " + new Date(_fecha).getDay());
            }
        });
    });
</script>

<div class="margen-10"></div>
<form id="frm-agenda-profesional" name="" method="post" action="">
    <input type="hidden" id="sucursales-profesional" name="DatosAgenda[sucursal-id]" value="<?php echo $_POST['DatosAgenda']['sucursal-id']; ?>" />
    <input type="hidden" id="profesional-id" name="DatosAgenda[profesional-id]" value="<?php echo $_POST['DatosAgenda']['profesional-id']; ?>" />
    <input type="hidden" id="dia-id" name="DatosAgenda[dia-id]" />
    <input type="hidden" id="fecha-seleccionada" name="DatosAgenda[fecha-seleccionada]" />
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
            </table>
            
            <table class="table">
                <tr>
                    <th>HORA</th>
                    <th>ESTADO</th>
                </tr>
                <?php foreach($intervalos as $intervalo): ?>
                <?php //echo "<pre>"; print_r($intervalo); echo "</pre>"; ?>
                <tr>
                    <td><?php echo $intervalo['intervalo']; ?></td>
                    <td>Disponible</td>
                </tr>
                <?php endforeach; ?>
            </table>
        </td>
    </tr>
</table>