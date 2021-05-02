<h1 style="text-align:center; color:dodgerblue">REPORTE DE MEDIDAS</h1>
<br>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th style='text-align:center'>FECHA</th>
        <th style='text-align:center'>EDAD</th>
        <th style='text-align:center'>PESO</th>
        <th style='text-align:center'>TALLA</th>
        <th style='text-align:center'>IMC</th>
        <th style='text-align:center'>TMB</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <?php
        foreach ($model as $valores)
        {
            if($cedula== $valores->ced_usu_med)
            {
                echo "<tr> ";
                echo "<td style='text-align:center'>$valores->fecha_med</td>";
                echo "<td style='text-align:center'>$valores->edad_med</td>";
                echo "<td style='text-align:center'>$valores->peso_med</td>";
                echo "<td style='text-align:center'>$valores->talla_med</td>";
                echo "<td style='text-align:center'>$valores->imc_med</td>";
                echo "<td style='text-align:center'>$valores->mtb_med</td>";
                echo "</tr>";
            }
        }
        ?>
    </tr>
    </tbody>
</table>