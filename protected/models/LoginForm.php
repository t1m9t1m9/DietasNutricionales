<?php

/**
 * LoginForm class.
 * LoginForm is the data structure for keeping
 * user login form data. It is used by the 'login' action of 'SiteController'.
 */
class LoginForm extends CFormModel
{
	public $username;
	public $password;
    public $rememberMe;
	private $_identity;

	/**
	 * Declares the validation rules.
	 * The rules state that username and password are required,
	 * and password needs to be authenticated.
	 */
	public function rules()
	{
		return array(
			// username and password are required
			array(
			    'username, password',
                'required',
			    'message' => 'Campo requerido',
		),
			array(
					'username',
					'match',
					'pattern' => '/^[0-9]+$/i',
					'message' => 'Solo numeros.',
				),
				array(
				    'username',
                    'length',
                    'min' => 10,
                    'tooShort' => 'La cedula tiene 10 digitos',
                    'max' => 10,
                    'tooLong' => 'La cedula tiene 10 digitos',
                ),

				array(
					'password',
					'match',
					'pattern' => '/^[a-zA-Z0-9\_]+$/i',
					'message' => 'Solo letras, numeros y guiones bajos',
				),
            array(
                'password',
                'length',
                'min' => 8,
                'tooShort' => 'Su contraseña debe tener minimo 8 caracteres',
                'max' => 60,
                'tooLong' => 'Su contraseña debe tener maximo 60 caracteres',
            ),

			// rememberMe needs to be a boolean
			array('rememberMe', 'boolean'),
			// password needs to be authenticated
			array('password', 'authenticate'),
		);
	}

	/**
	 * Declares attribute labels.
	 */
	public function attributeLabels()
	{
		return array(
			'rememberMe'=>'Recordar sesion',
			'username' => 'Cedula',
		);
	}

	/**
	 * Authenticates the password.
	 * This is the 'authenticate' validator as declared in rules().
	 * @param string $attribute the name of the attribute to be validated.
	 * @param array $params additional parameters passed with rule when being executed.
	 */
	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			if(!$this->_identity->authenticate())
				$this->addError('password','Error al iniciar sesion.');
		}
	}

	/**
	 * Logs in the user using the given username and password in the model.
	 * @return boolean whether login is successful
	 */
	public function login()
	{
		if($this->_identity===null)
		{
			$this->_identity=new UserIdentity($this->username,$this->password);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{
			$duration=$this->rememberMe ? 3600*24*30 : 0; // 30 days
			Yii::app()->user->login($this->_identity,$duration);
			return true;
		}
		else
			return false;
	}
}
