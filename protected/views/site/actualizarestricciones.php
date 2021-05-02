<?php
$this->pageTitle = 'Formulario de Actualizacion de Restricciones';
$this->breadcrumbs = array('Actualizar restricciones');
$idRestricciones = Restricciones::model()->findAll();//Recupera de la bdd todas las restricciones
?>

<h3 align="center" style="color:dodgerblue;">Formulario de Actualizacion de Restricciones</h3>

<strong class = 'text-info'><?php echo $msg; ?></strong>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/actualizarestricciones'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ))
    ?>

    <?php
    foreach($idRestricciones as $valores)
    {
        //energia
        $maximoenergia=$valores->maximoenergia;
        $fijoenergia=$valores->fijoenergia;
        $minimoenergia=$valores->minimoenergia;
       //proteinas
        $maximoproteinas=$valores->maximoproteinas;
        $fijoproteinas=$valores->fijoproteinas;
        $minimoproteinas=$valores->minimoproteinas;
       //carbohidratos
        $maximocarbohidratos=$valores->maximocarbohidratos;
        $fijocarbohidratos=$valores->fijocarbohidratos;
        $minimocarbohidratos=$valores->minimocarbohidratos;
       //grasas
        $maximograsas=$valores->maximograsas;
        $fijograsas=$valores->fijograsas;
        $mingrasas=$valores->minimograsas;
    }
    ?>

    <!--ENERGIA-->

        <div class="row"  align="center" style="background-color: #555454; color: white">
           <?php
            echo $form->labelEx($model, 'maximoenergia');
            echo $form->textField($model, 'maximoenergia'); echo "<br>".' El valor actual : '.$maximoenergia;
            echo $form->error($model, 'maximoenergia', array('class' => 'text-error'));
            echo "<br><br>";
            echo $form->labelEx($model, 'fijoenergia');
            echo $form->textField($model, 'fijoenergia');echo "<br>".' El valor actual : '.$fijoenergia;
            echo $form->error($model, 'fijoenergia', array('class' => 'text-error'));
            echo "<br><br>";
            echo $form->labelEx($model, 'minimoenergia');
            echo $form->textField($model, 'minimoenergia');echo "<br>".' El valor actual : '.$minimoenergia;
            echo $form->error($model, 'minimoenergia', array('class' => 'text-error'));
            ?>
        </div>
<br>
    <!--PROTEINAS-->
    <div class="row" align="center" style="background-color: #214a86; color: white">
        <?php
        echo $form->labelEx($model, 'maximoproteinas');
        echo $form->textField($model, 'maximoproteinas');echo "<br>".' El valor actual : '.$maximoproteinas;
        echo $form->error($model, 'maximoproteinas', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'fijoproteinas');
        echo $form->textField($model, 'fijoproteinas');echo "<br>".' El valor actual : '.$fijoproteinas;
        echo $form->error($model, 'fijoproteinas', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'minimoproteinas');
        echo $form->textField($model, 'minimoproteinas');echo "<br>".' El valor actual : '.$minimoproteinas;
        echo $form->error($model, 'minimoproteinas', array('class' => 'text-error'));
        ?>
    </div>
<br>
    <!--CARBOHIDRATOS-->
    <div class="row" align="center" style="background-color: #555454; color: white">
        <?php
        echo $form->labelEx($model, 'maximocarbohidratos');
        echo $form->textField($model, 'maximocarbohidratos');echo "<br>".' El valor actual : '.$maximocarbohidratos;
        echo $form->error($model, 'maximocarbohidratos', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'fijocarbohidratos');
        echo $form->textField($model, 'fijocarbohidratos');echo "<br>".' El valor actual : '.$fijocarbohidratos;
        echo $form->error($model, 'fijocarbohidratos', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'minimocarbohidratos');
        echo $form->textField($model, 'minimocarbohidratos');echo "<br>".' El valor actual : '.$minimocarbohidratos;
        echo $form->error($model, 'minimocarbohidratos', array('class' => 'text-error'));
        ?>
    </div>
<br>
    <!--GRASAS-->
    <div class="row" align="center" style="background-color: #214a86; color: white">
        <?php
        echo $form->labelEx($model, 'maximograsas');
        echo $form->textField($model, 'maximograsas');echo "<br>".' El valor actual : '.$maximograsas;
        echo $form->error($model, 'maximograsas', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'fijograsas');
        echo $form->textField($model, 'fijograsas');echo "<br>".' El valor actual : '.$fijograsas;
        echo $form->error($model, 'fijograsas', array('class' => 'text-error'));
        echo "<br><br>";
        echo $form->labelEx($model, 'minimograsas');
        echo $form->textField($model, 'minimograsas');echo "<br>".' El valor actual : '.$mingrasas;
        echo $form->error($model, 'minimograsas', array('class' => 'text-error'));
        ?>
    </div>

<br>
    <!--BOTON SUBMIT-->
    <div class="row" align="center">
        <?php
        echo CHtml::submitButton("Actualizar", array('class' => 'btn btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
