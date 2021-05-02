<?php
$this->pageTitle = 'Reporte de Usuarios';
$this->breadcrumbs = array('Reporte de Usuarios');
$idAli = TblUsuario::model()->findAll();
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

<h1 style="text-align:center; color:dodgerblue" id="titulo">REPORTE DE USUARIOS</h1>
<br>
<div id="tabla">
<table>
    <tr>
        <th style='text-align:center'>CEDULA</th>
        <th style='text-align:center'>NOMBBRE</th>
        <th style='text-align:center'>APELLIDO</th>
    </tr>


        <?php
        foreach ($idAli as $valores)
        {
            echo "<tr> ";
            echo "<td style='text-align:center'>$valores->ced_usu</td>";
            echo "<td style='text-align:center'>$valores->nom_usu</td>";
            echo "<td style='text-align:center'>$valores->ape_usu</td>";
            echo "</tr>";
        }
        ?>
</table>
</div>
<br>
<p style="text-align:center">
    <a href="index.php?r=site/excelusuarios" class="btn btn-info" role="button">Exportar a Excel</a>
    <a class="btn btn-info" role="button" onclick="generatePdf()">Exportar a PDF</a>
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
            title: 'Reporte de USUARIOS',
            subject: 'Reporte de USUARIOS',
            author: 'Marcelo Espinosa',
            keywords: 'generated, javascript, web 2.0, ajax',
            creator: 'Marcelo Espinosa'
        });

        doc.fromHTML(titulo1, 140, 20)
        doc.fromHTML(tabla1, 80, 65)

        doc.save("Reporte de Usuarios.pdf")
    }
</script>