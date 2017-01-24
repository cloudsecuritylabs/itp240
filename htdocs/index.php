<html>
<head>
	<title>My Title</title>
</head>
<body>
	<h1>Hello World</h1>
<?php
	require_once('/var/www/html/php/itp240/htdocsInclude/MyApplicationFramework/initialize.php');
	require_once('/var/www/html/php/itp240/htdocsInclude/MyApplicationFramework/view/pageHeader.php');
	require_once('/var/www/html/php/itp240/htdocsInclude/MyApplicationFramework/view/pageFooter.php');
	echo $_SERVER['DOCUMENT_ROOT'];
	echo "<br>";
	echo 'Hello World';

?>

</body>

</html>