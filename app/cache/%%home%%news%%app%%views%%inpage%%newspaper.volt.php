<!DOCTYPE html>
<html>
<body>
	<center>
	
		<div>
			
			<h2><?php echo $value['tittle']; ?></h2>			
			<font size="4">By: <?php echo $value['author']; ?></font>
			<br>
			<br>
			<?php echo $value['body']; ?>
		</div>

		<br>
		<div>
            <?php echo $this->tag->linkTo(array('inpage/edit/' . $value['id'], 'Edit')); ?> |
            <?php echo $this->tag->linkTo(array('inpage/del/' . $value['id'], 'Delete')); ?>
        </div>
		<hr>

	</center>

	</body>
</html>