<html>
<head>
	<title>My Title</title>
</head>
<body>
	<h1>Hello World</h1>
<?php
	##Get the initilize file
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/initialize.php');
	##Get the page header information
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/view/pageHeader.php');
	##get the page footer information.
	require_once('/var/www/html/php/itp240/htdocsIncludes/MyApplicationFramework/view/pageFooter.php');
	
	##print the document root of the server.
	echo "<br>";
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "<br>";
	echo 'Hello World';

?>

</body>

</html>
