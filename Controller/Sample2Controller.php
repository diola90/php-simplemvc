<?php
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
