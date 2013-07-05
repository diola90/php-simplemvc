<?php
include_once "Controller.php";
/***
Controller Sample
***/
class Sample1Controller extends Controller
{
	function ShowAction($data_sample,$data_sample1)
	{
		echo "Sample Action without parameters data_sample = $data_sample and data_sample1= $data_sample1 ";
		return;
	}

 
	function SampleAction()
	{ 
	 
		
		echo "Sample Action without parameters!!";
		return;
	}
	
	function RedirectAction()
	{
		echo "You can't view this text.";
		header("Location: http://".$_SERVER['HTTP_HOST']."".$this->URLRedirect."");
		return;
	}

}

/***
You can declare the controller within the controller itself or to the View.
***/
$controller1 = new Sample1Controller();
/***
PopulateRequest will populate your request to invoke methods under HolidayController.
***/
$controller1->PopulateRequest();
?>
