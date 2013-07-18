<?php

/**
 * php-simplemvc
 *
 * An open source application development template for PHP 5.1.6 or newer
 *
 * @package		php-simplemvc
 * @author		Jose Levi J. Diola
 * @copyright	Copyright (c) 2008 - 2011 
 * @link		https://code.google.com/p/php-simplemvc
 * @guid		https://code.google.com/p/php-simplemvc/wiki/PHPSimpleMVC
 * @contact		diola90@gmail.com
 * @since		Version 1.0
 * @filesource
 */

 
class Controller
{
	public $Action;
	public $URLRedirect;
	/***
	GetData - get the value from an array matching the $key.
	$globalArray - array with keys. This could be global array form $_POST or $_GET
	$key - key of the globalArray. If $key has no match in $globalArray then we will find a key with post fix of $key instead.
	$exact - controls if finding a post fix of $key will be enabled.
	***/
	static function GetData($globalArray,$key,$exact=false)
	{
		if(array_key_exists($key,$globalArray))
		{
			$data = $globalArray[$key];
			return $data;
		}
		else
		{ 
			if($exact==true)
			{
				return null;
			}
			
			$datas = array_intersect_key($globalArray, array_flip(preg_grep('/_'.$key.'$/', array_keys($globalArray))));

			if(count($datas) > 0)
			{ 
				$data = $datas[key($datas)];
				return $data;
			}
			
		}
		return null;
	}
	
	/***
	GetGlobalData -  get the value from $_POST or $_GET matching the $key.
	$exact - controls if finding a post fix of $key will be enabled.
	***/
	static function GetGlobalData($key,$exact=false)
	{
		$data = self::GetData($_POST,$key,$exact); 

		if(!isset($data))
		{
			$data = self::GetData($_GET,$key,$exact);
		}
		
		return $data;
	}
	
	/***
	GetActionRedirect - Get both Action and URLRedirect from either $_POST or $_GET
	***/
	static function GetActionRedirect(&$action,&$urlredirect)
	{
		$action = self::GetGlobalData("action");

		$urlredirect = self::GetGlobalData("url");
 
	}
	
	/***
	CreateParameters - returns the parameters of the menthod defined in Action. 
	This function will get the method parameters by reflection, then assign those array with values from $_POST or $_GET.
	Note: Created Array of Parameters should be in order with respect to action-method parameters.
	***/
	private function CreateParameters()
	{
		$r = new ReflectionMethod(get_class($this), $this->Action);
		$params = $r->getParameters();
		
		$parameters = array();
		
		foreach($params as $key=>$param)
		{
				array_push($parameters,htmlentities(self::GetGlobalData($param->name,true)));
		}
		
		return $parameters;
	}
	
	/***
	PopulateRequest - This will populate request from $_POST or $_GET and invoke the action.
	"action" should be inside the $_POST, if "action" is not found it will search for *_action key. The $_POST[*_action]
	or $_GET[*_action] value will be used to invoke the method from the derived class. The method's (invoked) parameter should 
	be the same name with the $_POST/$_GET key.
	***/
	public function PopulateRequest()
	{
		Controller::GetActionRedirect($this->Action,$this->URLRedirect);
 
		if(isset($this->Action))
		{
			$parameters = $this->CreateParameters();
			try{ 
				call_user_func_array(array($this, $this->Action), $parameters);
			}catch(Exception $e)
			{}
		}	 
	}
}
?>