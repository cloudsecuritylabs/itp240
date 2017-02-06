<html>
<head><title>Temperature Conversion</title></head>
	<body>

		<?php $request_method = $_SERVER['REQUEST_METHOD']; ?>
		<?php if ($request_method == 'GET') 
			{ ?>
			<!-- Add the html block -->

			<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
			Fahrenheit temperature:
				<input type="text" name="fahrenheit" /> <br />
				<input type="submit" name="Convert to Celsius!" />
			</form>

			<?php
			}

			elseif ($_SERVER['REQUEST_METHOD'] == 'POST') 
			{
				$fahr = $_POST['fahrenheit'];
				$celsius = ($fahr - 32) * 5/9;
				printf("%.2fF is %.2fC", $fahr, $celsius);
			} 

			else {
				die("This script only works with GET and POST requests.");
			}
	?>
	</body>
</html>