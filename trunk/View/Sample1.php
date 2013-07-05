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
?> 

<form action='/php-simplemvc/Controller/Sample1Controller.php' method='POST'>
	<input type="text" name="data_sample" id="data_sample" value="Hello World!" />
	<input type="text" name="data_sample1" id="data_sample1" value="Hello Php!" />
	<input type="submit" name="submit_action" id="submit_action" value="SampleAction" />
	<input type="submit" name="show_action" id="submit_action" value="ShowAction" />
	
	<input type='hidden' name='url' id='url_id' value='/php-simplemvc/View/Sample1.php' />
</form>		 

<?php
include_once "Footer.php";		 
?>