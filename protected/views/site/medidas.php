<?php
$this->pageTitle = 'Registro de Medidas';
$this->breadcrumbs = array('medidas');
?>

<h3 align="center" style="color:dodgerblue;">Registro de Medidas</h3>

<h4 align="center"><strong class = 'text-info'><?php echo $msg; ?></strong></h4>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/medidas'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));

    $idusu = TblUsuario::model()->findAll();
    $cedula = Yii::app()->user->name;
    $i1 = 1;
    $posision = 0;
    foreach($idusu as $idusuced)
    {
    if($cedula == $ced[$i1++]="$idusuced->ced_usu")
    {
    $posision=$i1;
    }
    $nom[$i1]="$idusuced->nom_usu";
    $ape[$i1]="$idusuced->ape_usu";
    }
    ?>

    <h4 align="center">
        <?php
            echo $nom[$posision];
            echo ' ';
            echo $ape[$posision];
        ?>
    </h4>

    <h4 align="center">
        <?php
        $fechamed = date("d/m/Y");
        echo "Fecha: " . $fechamed . "<br>";
        ?>
    </h4>

    <!--EDAD-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'edad');
        echo $form->textField($model, 'edad');
        echo $form->error($model, 'edad', array('class' => 'text-error'));
        ?>
    </div>

    <!--PESO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'peso en kilogramos');
        echo $form->textField($model, 'peso');
        echo $form->error($model, 'peso', array('class' => 'text-error'));
        ?>
    </div>

    <!--TALLA-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'talla en centimetros');
        echo $form->textField($model, 'talla');
        echo $form->error($model, 'talla', array('class' => 'text-error'));
        ?>
    </div>

    <!--SEXO-->
    <div class="row" align="center">
        <?php
            echo $form->labelEx($model, "sexo");
            echo $form->radioButtonList(
            $model,
            'sexo',
            array('1' => 'Hombre', '2' => 'Mujer'),
                array(
                        'labelOptions' => array('style' => 'display:inline'),
                    'separator' => '',
                    'template' => ' {label}: {input} ',
                )
            );
        ?>
    </div>
<br>
    <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Registrar", array('class' => 'btn btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div>