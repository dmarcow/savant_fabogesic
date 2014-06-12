<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	//Using EsAdministrador as name to check access rules by 1 / 0 if is administrator or not
	private $_name;

	public function authenticate()
	{
		$user = Usuario::model()->findByAttributes(array('Email'=>$this->username));

		if($user == null){
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		}else if($user->Password !== $this->password){
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		}else{
			$this->_name = $user->EsAdministrador;
			$this->errorCode=self::ERROR_NONE;
		}
		
		return !$this->errorCode;
	}

    public function getName(){

        return $this->_name;
    }
}