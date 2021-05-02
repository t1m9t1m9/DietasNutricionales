<h1 style="text-align:center; color:dodgerblue">REPORTE DE USUARIOS</h1>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th style='text-align:center'>CEDULA</th>
        <th style='text-align:center'>NOMBBRE</th>
        <th style='text-align:center'>APELLIDO</th>
    </tr>
    </thead>
    <tbody>
    <tr>

        <?php
        foreach ($model as $valores)
        {
            echo "<tr> ";
            echo "<td style='text-align:center'>$valores->ced_usu</td>";
            echo "<td style='text-align:center'>$valores->nom_usu</td>";
            echo "<td style='text-align:center'>$valores->ape_usu</td>";
            echo "</tr>";
        }
        ?>
    </tr>
    </tbody>
</table>