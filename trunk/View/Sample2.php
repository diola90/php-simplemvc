<?php
 
include_once "Header.php";
include_once "../Controller/Sample2Controller.php";
// controller sample that is used within the view
$controller2 = new Sample2Controller();
$controller2->PopulateRequest();
?> 

<form action='' method='GET'>
	<select id="option_data" name="option_data">
	  <option value="">Select Source...</option>	
	  <option value="database">Database</option>
	  <option value="service">Service</option>
	  <option value="file">File</option>
	</select>
	<input type="submit" name="submit_action" id="submit_action" value="SetDescription" />
</form>		 

<?php
echo $controller2->Description;
include_once "Footer.php";		 
?>