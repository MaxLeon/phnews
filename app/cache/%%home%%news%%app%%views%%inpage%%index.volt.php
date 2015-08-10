<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<font size="6">
	<h1>Welcome <?php echo $name; ?></h1>

	<?php echo $this->tag->linkTo(array('create', 'Add a news')); ?>

	</font>
	</b></p>

	</center>
</html>