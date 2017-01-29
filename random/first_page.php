
<h1>First Page</h1>
	<div>
		<?php $link_name = " Second Page From php echo " ?>
		<?php $id = 2; ?>
		<?php $company = " Johnson & Johnson"; ?>


	</div>


<a href="second_page.php?id =<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name; ?></a>
