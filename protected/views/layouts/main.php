<?php /* @var $this Controller */
$cedu=Yii::app()->user->name;
$idusu = TblUsuario::model()->findAll();
$i1 = 1;
$posision = 0;
foreach($idusu as $idusuced)
{
    if($cedu == $ced[$i1++]="$idusuced->ced_usu")
    {
        $posision=$i1;
    }
    $nom[$i1]="$idusuced->nom_usu";
    $ape[$i1]="$idusuced->ape_usu";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<?php
	echo Yii::app()->bootstrap->registerAllCss();
	echo Yii::app()->bootstrap->registerCoreScripts();
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<!-- <div class="container" id="page"> -->
<!--<div id="header">-->
<!--    <div id="logo">--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</div>-->
<!--</div>-->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
			<button type="button" class="btn btn-navbar" data-toogle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
                <span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
			<?php echo CHtml::encode(Yii::app()->name); ?>
			</a>
				<div class="nav-collapse collapse">
		<?php
        // TODO: Cedula del administrador
        if($cedu != '1010101010')
        {
            if($posision != '0') {
                $this->widget('bootstrap.widgets.TbMenu', array(


                    'items' => array(
                        array('label' => 'Inicio', 'url' => array('/site/index')),
                        //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        //array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label' => 'Registro', 'url' => array('/site/registro'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),

                        array('label' => 'Medidas', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                // array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                                array('label' => 'Registro de Medidas', 'url' => array('/site/medidas')),
                                array('label' => 'Reporte de Medidas', 'url' => array('/site/reportemedidas')),
                            ),
                        ),
                        array('label' => 'Dieta', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Calculo de Dieta', 'url' => array('/site/dieta')),
                            ),),
                        array('label' => 'Panel de Control', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                                // array('label' => 'Dieta', 'url' => array('/site/dieta')),
                                // array('label' => 'Medidas', 'url' => array('/site/medidas')),
                            ),
                        ),
                        //array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                        array('label' => 'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),

                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                ));
            }
            else
            {
                $this->widget('bootstrap.widgets.TbMenu', array(
                    'items' => array(
                        array('label' => 'Inicio', 'url' => array('/site/index')),
                        //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                        //array('label'=>'Contact', 'url'=>array('/site/contact')),
                        array('label' => 'Registro', 'url' => array('/site/registro'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Medidas', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                // array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                                array('label' => 'Registro de Medidas', 'url' => array('/site/medidas')),
                                array('label' => 'Reporte de Medidas', 'url' => array('/site/reportemedidas')),
                            ),
                        ),
                        array('label' => 'Dieta', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Calculo de Dieta', 'url' => array('/site/dieta')),
                            ),),
                        array('label' => 'Panel de Control', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                                // array('label' => 'Dieta', 'url' => array('/site/dieta')),
                                // array('label' => 'Medidas', 'url' => array('/site/medidas')),
                            ),
                        ),
                        array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                       // array('label' => 'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                ));
            }
        }
        else
        {
            //TODO: ADMINISTRATOR
            $this->widget('bootstrap.widgets.TbMenu',array(
                'items'=>array(
                    array('label'=>'Inicio', 'url'=>array('/site/index')),
                    //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    //array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Registro', 'url'=>array('/site/registro'), 'visible'=>Yii::app()->user->isGuest),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),

                    array('label'=>'Actualizar', 'visible'=>!Yii::app()->user->isGuest,
                    'items' => array(
                            // array('label' => 'Ingreso de Alimentos', 'url' => array('/site/ingresoalimentos')),
                            array('label' => 'Actualizar Porcentajes de Comidas', 'url' => array('/site/actualizarporcentajecomidas')),
                            array('label' => 'Actualizar Restricciones', 'url' => array('/site/actualizarestricciones')),
                            array('label' => 'Actualizar Desayuno', 'url' => array('/desayuno/index')),
                            //array('label' => 'Medidas', 'url' => array('/site/medidas')),
                    ),
                    ),

                    array('label'=>'Reportes', 'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                            array('label' => 'Reporte de Alimentos', 'url' => array('/site/reportealimentos')),
                            array('label' => 'Reporte de Usuarios', 'url' => array('/site/reporteusuarios')),
                            //array('label' => 'Medidas', 'url' => array('/site/medidas')),
                        ),
                    ),

                    array('label'=>'Panel de Control', 'visible'=>!Yii::app()->user->isGuest,
                        'items' => array(
                            array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                            // array('label' => 'Dieta', 'url' => array('/site/dieta')),
                            // array('label' => 'Medidas', 'url' => array('/site/medidas')),
                        ),
                    ),
                   // array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                   //TODO: Poner el nombre junto al Login
                    array('label'=>'Logout ('.$nom[$posision].')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),

                'htmlOptions' => array('class' => 'nav navbar-nav'),
            ));
        }?>
				</div>
			</div>
		</div>
	</div><!-- mainmenu -->

			<div class="container">
				<div class="page-header">
					<br /> <br />
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
				</div>

	<?php echo $content; ?>

	<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by Marcelo Espinosa.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div> <!-- footer -->


<!--</div>  </div>page -->

</body>
</html>
