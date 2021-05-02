<h1 style="text-align:center; color:dodgerblue">REPORTE DE ALIMENTOS</h1>
<br>
<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th style='text-align:center'>ID</th>
        <th style='text-align:center'>NOMBBRE</th>
        <th style='text-align:center'>ENERGIA</th>
        <th style='text-align:center'>PROTEINAS</th>
        <th style='text-align:center'>CARBOHIDRATOS</th>
        <th style='text-align:center'>GRASAS</th>
        <th style='text-align:center'>COSTOS</th>
    </tr>
    </thead>
    <tbody>
    <tr>

<?php

foreach ($model as $valores)
{
    echo "<tr> ";
    echo "<td style='text-align:center'>$valores->id</td>";
    echo "<td style='text-align:center'>$valores->nombre</td>";
    echo "<td style='text-align:center'>$valores->energia</td>";
    echo "<td style='text-align:center'>$valores->proteinas</td>";
    echo "<td style='text-align:center'>$valores->carbohidratos</td>";
    echo "<td style='text-align:center'>$valores->grasas</td>";
    echo "<td style='text-align:center'>"."$ "."$valores->costo</td>";
    echo "</tr>";
}
?>