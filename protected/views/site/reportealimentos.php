<?php
$this->pageTitle = 'Reporte de Alimentos';
$this->breadcrumbs = array('Reporte de alimentos');
//$idAli = TblAlimentos::model()->findAll();//recupera de la bdd todos los id
$idAli = Desayuno::model()->findAll();
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

<h1 style="text-align:center; color:dodgerblue" id="titulo">REPORTE DE ALIMENTOS</h1>
<br>
<div id="tabla">
        <table>
            <tr>
                <th style='text-align:center'>ID</th>
                <th style='text-align:center'>NOMBRE</th>
                <th style='text-align:center'>ENERGIA</th>
                <th style='text-align:center'>PROTEINAS</th>
                <th style='text-align:center'>CARBOHIDRATOS</th>
                <th style='text-align:center'>GRASAS</th>
                <th style='text-align:center'>COSTOS</th>
            </tr>

        <?php
        foreach ($idAli as $valores)
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
</table>
</div>
<br>
<p style="text-align:center">
    <a href="index.php?r=site/excelalimentos" class="btn btn-info" role="button">Exportar a Excel</a>
    <a class="btn btn-info" role="button" onclick="generatePdf()">Exportar a PDF</a>
</p>
<br>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>-->
<script>
    function generatePdf()
    {
        var doc = new jsPDF('l', 'pt')
        var titulo1 = document.getElementById('titulo')
        var tabla1 = document.getElementById('tabla')
        doc.setProperties({
            title: 'Reporte de Alimentos',
            subject: 'Reporte de Alimentos',
            author: 'Marcelo Espinosa',
            keywords: 'generated, javascript, web 2.0, ajax',
            creator: 'Marcelo Espinosa'
        });

        doc.fromHTML(titulo1, 220, 40)
        doc.fromHTML(tabla1, 100, 80)

        doc.save("Reporte de Alimentos.pdf")
    }
</script>