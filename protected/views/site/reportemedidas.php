<?php
$this->pageTitle = 'Reporte de Medidas';
$this->breadcrumbs = array('Reporte de medidas');
$idAli = Medidas::model()->findAll();//recupera de la bdd todos los id
$cedula = Yii::app()->user->name;
?>

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

<h1 style="text-align:center; color:dodgerblue"  id="titulo">REPORTE DE MEDIDAS</h1>

<div id="tabla">
<table>
    <tr>
        <th style='text-align:center'>FECHA</th>
        <th style='text-align:center'>EDAD</th>
        <th style='text-align:center'>PESO</th>
        <th style='text-align:center'>TALLA</th>
        <th style='text-align:center'>IMC</th>
        <th style='text-align:center'>TMB</th>
<!--    </tr>-->

        <?php
        foreach ($idAli as $valores)
        {
            if($cedula == $valores->ced_usu_med)
            {
                $num=number_format($valores->imc_med,2,'.',',');
                echo "<tr>";
                echo "<td style='text-align:center'>$valores->fecha_med</td>";
                echo "<td style='text-align:center'>$valores->edad_med</td>";
                echo "<td style='text-align:center'>$valores->peso_med</td>";
                echo "<td style='text-align:center'>$valores->talla_med</td>";
                echo "<td style='text-align:center'>$num</td>";
                echo "<td style='text-align:center'>$valores->mtb_med</td>";
//                echo "</tr>";
            }
        }
        ?>

</table>
</div>
<br>

<p style="text-align:center">
    <a href="index.php?r=site/excelmedidas" class="btn btn-info" role="button">Exportar a Excel</a>
    <a class="btn btn-info" role="button" onclick="generatePdf()">Exportar a PDF</a>
<!--    <button onclick="generatePdf()">Generate PDF</button>-->
</p>
<br>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>

<script>
    function generatePdf()
    {
        var doc = new jsPDF('p', 'pt')
        var titulo1 = document.getElementById('titulo')
        var tabla1 = document.getElementById('tabla')
        doc.setProperties({
            title: 'Reporte de Medidas',
            subject: 'Reporte de Medidas',
            author: 'Marcelo Espinosa',
            keywords: 'generated, javascript, web 2.0, ajax',
            creator: 'Marcelo Espinosa'
        });

        doc.fromHTML(titulo1, 140, 20)
        doc.fromHTML(tabla1, 80, 65)

        doc.save("Reporte de Medidas.pdf")
    }
</script>
