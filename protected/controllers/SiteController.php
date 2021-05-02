<?php

class SiteController extends Controller
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
                'actions' => array('ingresoalimentos'),
                'actions' => array('medidas'),
                'actions' => array('calculo'),
                'actions' => array('dieta'),
                'actions' => array('actualizarestricciones'),
                'actions' => array('resultado'),
                'actions' => array('reportealimentos'),
                'actions' => array('reporteusuarios'),
                'actions' => array('reportemedidas'),
//                'actions' => array('actualizarporcentajecomidas'),

                'users' => array('?'),
            ),
        );
    }
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */

	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	//REGISTRO DE NUEVO USUARIO
	public function actionRegistro()
	{
		$model = new ValidarRegistro;
		$msg = '';

		if(isset($_POST['ajax'])  && $_POST['ajax'] === 'form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		if(isset($_POST['ValidarRegistro']))
		{
			$model->attributes = $_POST['ValidarRegistro'];
			if(!$model->validate())
			{
				$model->addError('repetir_password', 'Error al enviar el Formulario');
			}
			else
			{
				//Guardar el usuario nuevo
                $guardar = new ConsultasDB;
                $guardar->guardar_usuario(
                    $model->cedula,
                    $model->nombre,
                    $model->apellido,
                    $model->password);

                //refrescar pagina
                    $model->cedula = '';
                    $model->nombre = '';
                    $model->apellido = '';
                    $model->password = '';
                    $model->repetir_password = '';

                //mensage de confirmacion de registro
                $msg = 'Se registro exitosamente';
			}
		}
		$this->render('registro', array('model' => $model, 'msg' => $msg));
	}

	//RECUPERACION DE CONTRASENA
	public function actionRecuperarpassword()
	{
		$model = new RecuperarPassword;
		$msg = '';
		$msg1 = '';
		$password = '';

		if(isset($_POST["RecuperarPassword"]))
		{
			$model->attributes = $_POST['RecuperarPassword'];
			if(!$model->validate())
			{
				$msg = "<strong class='text-error'>Error al enviar el Formulario</strong>";
			}
			else
			{
                $conexion = Yii::app()->db;
                //verificar si el usuario existe
                $consulta = "SELECT ced_usu FROM usuario WHERE ";
                $consulta .= "ced_usu='".$model->cedula."'";
                $resultado = $conexion->createCommand($consulta);
                $filas = $resultado->query();
                $existe = false;
                foreach ($filas as $fila)
                {
                    $existe = true;
                }
                //si el usuario existe
                if($existe === true)
                {
                    $tes = $model->cedula;
                    //buscar el password del usuario
                    $consulta = "SELECT pass_usu FROM usuario WHERE ";
                    $consulta .= "ced_usu='".$model->cedula."'";

                    $resultado = $conexion->createCommand($consulta)->query();

                    $resultado->bindColumn(1, $password);

                    while($resultado->read()!==false)
                    {
                        $actualizar1 = new ConsultasDB;
                        $actualizar1->actualizar_pass(
                            $model->cedula
                        );


                        $msg1 = 'Su contraseña es su numero de cedula, por favor ingrese y cambien su contraseña por seguridad';

                        //refrescar vista
                        $model->cedula = '';
                        $model->captcha ='';
                    }
                }

			}
		}
		$this->render('recuperarpassword', array('model' => $model, 'msg' => $msg, 'msg1' => $msg1));
	}

	//DIETAS
	public function actionDieta()
    {
        $this->render('dieta');
    }

    //RESULTADO
    public function actionResultado()
    {
        $this->render('resultado');
    }

    //CALCULO
    public function actionCalculo()
    {
        $this->render('calculo');
    }

    //INGRESO ALIMENTOS
    public function actionIngresoAlimentos()
    {
        $model = new ValidarIngresoAlimentos;
        $msg = '';
        if(isset($_POST['ajax'])  && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST['ValidarIngresoAlimentos']))
        {
            $model->attributes = $_POST['ValidarIngresoAlimentos'];
            if(!$model->validate())
            {
                $model->addError('nombre', 'Error al enviar el Formulario');
            }
            else
            {
                //Guardar alimento nuevo
                $guardar = new ConsultasDB;
                $guardar->guardar_alimento(
                    $model->nombre,
                    $model->energia,
                    $model->proteinas,
                    $model->carbohidratos,
                    $model->grasas,
                    $model->costo,
                    $model->pdesayuno,
                    $model->palmuerzo,
                    $model->pmerienda,
                    $model->pbreak
                );

                //refrescar pagina
                    $model->nombre = '';
                    $model->energia = '';
                    $model->proteinas = '';
                    $model->carbohidratos = '';
                    $model->grasas = '';
                    $model->costo = '';
                    $model->pdesayuno = '';
                    $model->palmuerzo = '';
                    $model->pmerienda = '';
                    $model->pbreak = '';

                //mensage de confirmacion de registro
                $msg = 'Se registro exitosamente';
            }
        }
        $this->render('ingresoalimentos', array('model' => $model, 'msg' => $msg));
    }

    //MEDIDAS
    public function actionMedidas()
    {
        $model = new ValidarMedidas;
        $msg = '';
        $model->sexo ='1';

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST["ValidarMedidas"]))
        {
            $model->attributes = $_POST['ValidarMedidas'];
            if (!$model->validate())
            {
                $model->addError('fechamed','Fecha repetida');
                //$msg = "<strong class='text-error'>Error al enviar el Formulario</strong>";
            }
            else
            {
                //guardar medidas
                $guardar = new ConsultasDB;
                $guardar->guardar_medidas(
                    $model->edad,
                    $model->peso,
                    $model->talla,
                    $model->sexo);

                //refrescar pagina
                $model->edad = '';
                $model->peso = '';
                $model->talla = '';
                $model->sexo ='1';
                //mensage de confirmacion de registro
                $msg = 'Se registro exitosamente';
            }
        }
            $this->render('medidas', array('model' => $model, 'msg' => $msg));
    }


    //ACTUALIZAR RESTRICCIONES
    public function actionActualizarestricciones()
    {
        $model = new ValidarRestricciones;
        $msg = '';

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST["ValidarRestricciones"]))
        {
            $model->attributes = $_POST['ValidarRestricciones'];
            if (!$model->validate())
            {
                //$model->addError('maximoenergia','Fecha repetida');
                $msg = "<strong class='text-error'>Error al enviar el Formulario</strong>";
            }
            else
            {
                //actualzar restricciones
                $actualizar = new ConsultasDB;
                $actualizar->actualizar_restricciones(
                    $model->maximoenergia,
                    $model->minimoenergia,
                    $model->fijoenergia,
                    $model->maximoproteinas,
                    $model->minimoproteinas,
                    $model->fijoproteinas,
                    $model->maximocarbohidratos,
                    $model->minimocarbohidratos,
                    $model->fijocarbohidratos,
                    $model->maximograsas,
                    $model->minimograsas,
                    $model->fijograsas
                );

                //refrescar pagina
                    $model->maximoenergia='';
                    $model->minimoenergia='';
                    $model->fijoenergia='';
                    $model->maximoproteinas='';
                    $model->minimoproteinas='';
                    $model->fijoproteinas='';
                    $model->maximocarbohidratos='';
                    $model->minimocarbohidratos='';
                    $model->fijocarbohidratos='';
                    $model->maximograsas='';
                    $model->minimograsas='';
                    $model->fijograsas='';
                //mensage de confirmacion de registro
                $msg = 'Se Actualizo exitosamente';
            }
        }

        $this->render('actualizarestricciones', array('model'=> $model, 'msg' => $msg));
    }

    //REPORTE ALIMENTOS
    public function actionReportealimentos()
    {
        $this->render('reportealimentos');
    }

    //REPORTE EXCELL USUARIOS
    public function actionExcelUsuarios()
    {
        $model = TblUsuario::model()->findAll();
        $contenido = $this->renderPartial('excelusuarios',array('model'=>$model),true);
        yii::app()->request->sendFile("Reporte Usuarios.xls", $contenido);
        $this->render('excelusuarios');
    }

    //REPORTE EXCELL ALIMENTOS
    public function actionExcelAlimentos()
    {
        $model = TblAlimentos::model()->findAll();
        $contenido = $this->renderPartial('excelalimentos',array('model'=>$model),true);
        yii::app()->request->sendFile("Reporte Alimentos.xls", $contenido);
        $this->render('excelalimentos');
    }

    //REPORTE EXCELL MEDIDAS
    public function actionExcelMedidas()
    {
        $cedula = Yii::app()->user->name;
        $model = Medidas::model()->findAll();
        $contenido = $this->renderPartial('excelmedidas',array('model'=>$model, 'cedula' => $cedula),true);
        yii::app()->request->sendFile("Reporte Medidas.xls", $contenido);
        $this->render('excelmedidas');
    }

    //REPORTE USUARIOS
    public function actionReporteusuarios()
    {
        $this->render('reporteusuarios');
    }

    //REPORTE MEDIDAS
    public function actionReportemedidas()
    {
        $this->render('reportemedidas');
    }

  //Actualizar desayuno
    public function actionIngresodesayuno()
    {
        $model = new ValidarIngresoDesayuno;
        $msg = '';

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST["ValidarIngresoDesayuno"]))
        {
            $model->attributes = $_POST['ValidarIngresoDesayuno'];
            if (!$model->validate())
            {
                $msg = "<strong class='text-error'>Error al enviar el Formulario</strong>";
            }
            else
            {
                //actualzar restricciones

                //refrescar pagina

                //mensage de confirmacion de registro
                $msg = 'Se Actualizo exitosamente';
            }
        }

        $this->render('ingresodesayuno', array('model'=> $model, 'msg' => $msg));
    }

    //Actualizar los porcentajes de cada comida
    public function actionActualizarporcentajecomidas()
    {
        $model = new ValidarPorcentajes;
        $msg = '';

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if(isset($_POST["ValidarPorcentajes"]))
        {
            $model->attributes = $_POST['ValidarPorcentajes'];
            if (!$model->validate())
            {
                $msg = "<strong class='text-error'>Error al enviar el Formulario</strong>";
            }
            else
            {
                //actualzar restricciones
                $actualizar = new ConsultasDB;
                $actualizar->actualizar_porcentajes(
                    $model->desayuno,
                    $model->breakmanana,
                    $model->almuerzo,
                    $model->breaktarde,
                    $model->merienda
                );

                //refrescar pagina
                    $model->desayuno = '';
                    $model->breakmanana = '';
                    $model->almuerzo = '';
                    $model->breaktarde = '';
                    $model->merienda = '';
                //mensage de confirmacion de registro
                $msg = 'Se Actualizo exitosamente';
            }
        }
        $this->render('actualizarporcentajecomidas', array('model'=> $model, 'msg' => $msg));
    }

}