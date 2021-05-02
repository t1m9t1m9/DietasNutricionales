<?php
include("calculo/matriz.php");
$this->pageTitle = 'Resultado';
$this->breadcrumbs = array('Resultado');
?>

<h1 style="text-align:center; color:dodgerblue"> Dieta Alimenticia Óptima: Desayuno</h1>
<br>

<?php
calculo();
?>