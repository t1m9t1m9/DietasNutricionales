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
$this->pageTitle = 'Calculo de Dieta';
$this->breadcrumbs = array('Calculo de Dieta');
$idAlimentos = Desayuno::model()->findAll();
$idMedidas = Medidas::model()->findAll();
$idPorcentajeAlimentos = Porcentajecomidas::model()->findAll();
$cedula = Yii::app()->user->name;
echo "<h1 style='text-align:center; color:dodgerblue'>Alimentos elegidos para su Desayuno</h1> <br /> ";

foreach ($idMedidas as $valores) {
    if ($cedula == $valores->ced_usu_med) {
        $imc = number_format($valores->imc_med, 2, '.', ',');
        $tmb = $valores->mtb_med;
    }
}
foreach ($idPorcentajeAlimentos as $porcentajes)
{
    $desayuno = $porcentajes->desayuno;
    $breakmanana = $porcentajes->brakemanana;
    $almuerzo = $porcentajes->almuerzo;
    $breaktarde = $porcentajes->braketarde;
    $merienda = $porcentajes->merienda;
}
echo "Kilo calorias a consumir en el Dia: ".$tmb;
echo "<br><br>";
echo "Porcentaje de calorias a consumir en el Desayuno: ".$desayuno."% = ".$des = ($tmb*$desayuno)/100;echo" Kilocalorias";
echo "<br>";
echo "Porcentaje de calorias a consumir en Break de la Manana: ".$breakmanana."% = ".$bm = ($tmb*$breakmanana)/100;echo" Kilocalorias";
echo "<br>";
echo "Porcentaje de calorias a consumir en el Almuerzo: ".$almuerzo."% = ".$alm = ($tmb*$almuerzo)/100;echo" Kilocalorias";
echo "<br>";
echo "Porcentaje de calorias a consumir en el Break de la Tarde: ".$breaktarde."% = ".$bt = ($tmb*$breaktarde)/100;echo" Kilocalorias";
echo "<br>";
echo "Porcentaje de calorias a consumir en la Merienda: ".$merienda."% = ".$mer = ($tmb*$merienda)/100;echo" Kilocalorias";
echo "<br><br>";

?>

<table>
            <tr>
                <th style='text-align:center'>ID</th>
                <th style='text-align:center'>NOMBRE</th>
                <th style='text-align:center'>ENERGIA</th>
                <th style='text-align:center'>PROTEINAS</th>
                <th style='text-align:center'>CARBOHIDRATOS</th>
                <th style='text-align:center'>GRASAS</th>
                <th style='text-align:center'>PORCION DIARIA</th>
                <th style='text-align:center'>COSTOS POR 100g</th>
            </tr>

        <?php
        foreach ($idAlimentos as $valores)
        {
            echo "<tr> ";
            echo "<td style='text-align:center'>$valores->id</td>";
            echo "<td style='text-align:center'>$valores->nombre</td>";
            echo "<td style='text-align:center'>$valores->energia</td>";
            echo "<td style='text-align:center'>$valores->proteinas</td>";
            echo "<td style='text-align:center'>$valores->carbohidratos</td>";
            echo "<td style='text-align:center'>$valores->grasas</td>";
            echo "<td style='text-align:center'>$valores->pdesayuno</td>";
            echo "<td style='text-align:center'>"."$ "."$valores->costo</td>";
            echo "</tr>";
        }
        ?>
</table>
<br>
<p style="text-align:center">
    <a href="index.php?r=site/resultado" class="btn btn-info" role="button">Continuar</a>
</p>