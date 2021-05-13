<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 5px;
    }

    th {
        background-color: black;
        color: white;
        border: 1px solid #dddddd;
        text-align: center;
        padding: 5px;
    }

    tr:nth-child(even) {
        text-align: center;
        background-color: #dddddd;
    }
</style>
<?php



function calculo()
{
    $M=1000;
    $restricciones = Restricciones::model()->findAll();
    $idAlimentos = Desayuno::model()->findAll();
    $idMedidas = Medidas::model()->findAll();
    $idPorcentajeAlimentos = Porcentajecomidas::model()->findAll();
    foreach ($idPorcentajeAlimentos as $porcentajes)
    {
        echo $desayuno = $porcentajes->desayuno;echo "<br>"; //porcentaje del desayuno
        echo $breakmanana = $porcentajes->brakemanana;echo "<br>";// porcentaje brake manana
        echo $almuerzo = $porcentajes->almuerzo;echo "<br>"; // porcentaje brake almuerzo
        echo $breaktarde = $porcentajes->braketarde;echo "<br>"; //porcentaje brake tarde
        echo $merienda = $porcentajes->merienda; //porcentaje merienda
    }
    echo "<br>";
    echo "<br>";

    foreach ($idAlimentos as $alimentos)
    {
        echo $energia = $alimentos->energia;echo " ";
        echo $proteinas = $alimentos->proteinas;echo " ";
        echo $carbohidratos = $alimentos->carbohidratos;echo " ";
        echo $grasas = $alimentos->grasas;echo " ";
        echo $porciones = $alimentos->pdesayuno;echo " ";
        echo $costo = $alimentos->costo;echo " ";
        echo "<br>";
    }
    echo "<br>";
    echo "M= ";echo $M;
    echo "<br>";
    echo "<br>";

    foreach ($restricciones as $res)
    {
        echo $minimoenergia = $res->minimoenergia;echo "<br>";
        echo $minimoproteinas = $res->minimoproteinas;echo "<br>";
        echo $minimocarbohidratos = $res->minimocarbohidratos; echo "<br>";
        echo $minimograsas = $res->minimograsas; echo "<br>";
    }
}


function tabla()
{
?>
    <table align="center">
    <tr>
        <th style="text-align:center">Materias Primas Seleccionadas</th>
        <th style="text-align:center">Porciones en gramos</th>
    </tr>
<?php
    echo "<tr> ";
    echo "<td style='text-align:center'>Arroz Integral</td>";
    echo "<td style='text-align:center'>100 gramos</td>";
    echo "</tr>";

    echo "<tr> ";
    echo "<td style='text-align:center'>Huevos</td>";
    echo "<td style='text-align:center'>200 gramos</td>";
    echo "</tr>";

    echo "<tr> ";
    echo "<td style='text-align:center'>Leche Descremada</td>";
    echo "<td style='text-align:center'>200 gramos</td>";
    echo "</tr>";

    echo "<tr> ";
    echo "<td style='text-align:center'>Frejol</td>";
    echo "<td style='text-align:center'>200 gramos</td>";
    echo "</tr>";

    echo "<tr> ";
    echo "<td style='text-align:center'><b>COSTO OPTIMO</b></td>";
    echo "<td style='text-align:center'><b>$ 2,50</b></td>";
    echo "</tr>";
?>
</table><br>
<?php
}
?>