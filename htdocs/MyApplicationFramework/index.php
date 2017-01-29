<html>
<head>
	<title>My Title</title>
</head>
<body>
	<h1>Hello World</h1>
<?php
	##Get the initilize file
	 echo "</h2>Get initialize file from htdocsIncludes</h2>";
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/initialize.php');
	##Get the page header information
	echo "<h2>Get pageHeader file from htdocsIncludes</h2>";
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/view/pageHeader.php');
	##get the page footer information.
	echo "<h2>Get pageFooter file from htdocsIncludes</h2>";
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/view/pageFooter.php');
	
	##print the document root of the server.
	echo "<br>";
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "<br>";
	echo 'Hello World';

?>

</body>

</html>
