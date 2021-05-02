<?php

class UsuarioController extends Controller
{
    public function filters()
    {
        return array('accessControl');
    }

    public function accessRules()
    {
        return array(
            array(
            'deny',
            'actions' => array('configuracion'),
            'users' => array('?'),
            ),
        );
    }

	public function actionConfiguracion()
	{
	    $model = new CambiarPassword;
	    $msg = '';

	    if(isset($_POST["CambiarPassword"]))
        {
            $model->attributes = $_POST["CambiarPassword"];
            if(!$model->validate())
            {
                $msg = "<strong class='text-error'>Error al enviar el formulario</strong>";
            }
            else
            {
                //consulta a la bdd
                $conexion = Yii::app()->db;
                //nombre de usuario
                $cedula = Yii::app()->user->name;

                $consulta = "UPDATE usuario SET ";
                $consulta .= "pass_usu='".md5($model->nuevo_password)."'";
                $consulta .= "WHERE ced_usu='".$cedula."'";

                $resultado = $conexion->createCommand($consulta)->execute();

                if($resultado)
                {
                    $msg = "<strong class='text-info'>Su password a sido actualizada</strong>";
                }
                else
                {
                    $msg = "<strong class='text-info'>Error, no se a podido cambiar el password</strong>";
                }
                $model->password = '';
                $model->nuevo_password = '';
                $model->repetir_nuevo_password = '';
            }
        }
		$this->render('configuracion', array('model' => $model, 'msg' => $msg));
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}