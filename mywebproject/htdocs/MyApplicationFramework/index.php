<html>
<?php
/************************************************/
/*	INDEX.HTML									*/
/*	This is the default location 				*/
/*	of the website. 							*/
/*	This file is responsible for receiving req.	*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/*												*/
/************************************************/
?>

<?php
	##Get the initilize file
	 // echo "</h2>Get initialize file from htdocsIncludes</h2>";
	require_once('/var/www/html/htdocsIncludes/MyApplicationFramework/initialize.php');
	##Get the page header information
	// echo "<h2>Get pageHeader file from htdocsIncludes</h2>";
	require_once('/var/www/html/htdocsIncludes/MyApplicationFramework/view/pageHeader.php');

?>

<!-- main container should go here -->
<div class="container">
	<h1>All is working</h1>
	<p>This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..
	This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..
	This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..
	This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..
	This is the main area to add context..This is the main area to add context..This is the main area to add context..This is the main area to add context..
	</p>

</div>


<?php
	##get the page footer information.
	// echo "<h2>Get pageFooter file from htdocsIncludes</h2>";
	require_once('/var/www/html/htdocsIncludes/MyApplicationFramework/view/pageFooter.php');
	
	##print the document root of the server.
	// echo "<br>";
	// echo $_SERVER['DOCUMENT_ROOT'];
	// echo "<br>";
	// echo 'Hello World';

?>

</body>

</html>
