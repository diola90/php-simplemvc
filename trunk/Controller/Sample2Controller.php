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

include_once "Controller.php";
/***
Controller Sample
***/
class Sample2Controller extends Controller
{
	public $Description="";
	function SetDescription($option_data)
	{
		switch($option_data)
		{
			case 'database':
				$this->Description = "I come from the database!";
				break;
			case 'service':
				$this->Description = "I come from the service!";
				break;
			case 'file':
				$this->Description = "I come from the File!";
				break;
			default: 
				$this->Description = "I come from the my mother!!!";
		}
		
	} 

}

/***
You can declare the controller within the controller itself or to the View.
***/
$controller1 = new Sample2Controller();
/***
PopulateRequest will populate your request to invoke methods under Sample2Controller.
***/
$controller1->PopulateRequest();
?>
