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