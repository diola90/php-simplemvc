<?php
 
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