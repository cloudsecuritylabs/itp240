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
	// require_once('/var/www/html/htdocsIncludes/MyApplicationFramework/initialize.php');	
	require_once('/var/www/html/php/itp240/mywebproject/htdocsIncludes/MyApplicationFramework/initialize.php');
	##Get the page header information
	// echo "<h2>Get pageHeader file from htdocsIncludes</h2>";
	require_once('/var/www/html/php/itp240/mywebproject/htdocsIncludes/MyApplicationFramework/view/pageHeader.php');






?>

<!-- main container should go here -->
<div class="container">
	<h1>All is working</h1>
	<?php
	$user1 = new User();
	$user1->setFirstName("Oshmo");
	$user1->setLastName("Basu");
	$user1->setDisplayName("Rakkhos");
	$user1->setEmail("oshmo@gmail.com");
	$user1->setPassword("myPassword");


	$user2 = new User();
	$user2->setFirstName("Mohmo");
	$user2->setLastName("Basu");
	$user2->setDisplayName("Rakkhosi");
	$user2->setEmail("mormi@gmail.com");
	$user2->setPassword("myPassword");

	?>

<table class="table .table-striped .table-bordered">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $user1->getFirstName(); ?></td>
      <td><?php echo $user1->getLastName(); ?></td>
      <td><?php echo $user1->getEmail(); ?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $user2->getFirstName(); ?></td>
      <td><?php echo $user2->getLastName(); ?></td>
      <td><?php echo $user2->getEmail(); ?></td>
    </tr>
<!--     <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr> -->
  </tbody>
</table>

<div class="alert alert-success">
  


	<?php
		$model = new MyFirstModel();
		$controller = new MyFirstController($model);
		$view = new MyFirstView($controller, $model);

		if(isset($__GET['action']) && !empty($__GET['action']))
		{
			$controller->{$__GET['action']}();
		}


		echo "new text";
		echo $view->output();
		$view->render();
	?>
</div>



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
	require_once('/var/www/html/php/itp240/mywebproject/htdocsIncludes/MyApplicationFramework/view/pageFooter.php');
	
	##print the document root of the server.
	// echo "<br>";
	// echo $_SERVER['DOCUMENT_ROOT'];
	// echo "<br>";
	// echo 'Hello World';




?>

</body>

</html>
