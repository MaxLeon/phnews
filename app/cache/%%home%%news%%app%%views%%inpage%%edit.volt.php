<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<body>
        <?php echo $this->tag->form(array('inpage/edit')); ?>

        <fieldset>
        <?php echo $this->tag->hiddenField(array('id', 'value' => $id)); ?>
        <div>
            <font size=6> <label for="tittle">Tittle</label> </font>
            <div>
                <?php echo $this->tag->textField(array('tittle', 'value' => $tittle)); ?>
            </div>
        </div>
        <br>
        <div>
            <font size=6> <label for="author">Author</label> </font>
            <div>
                <?php echo $this->tag->textField(array('author', 'value' => $author)); ?>
            </div>
        </div>
        <br>
        <div>
            <div>
                <?php echo $this->tag->textArea(array('body', 'cols' => '80', 'rows' => 20, 'value' => $body)); ?>
            </div>
        </div>

        <br>
        
        <div>
            <?php echo $this->tag->submitButton(array('Ok', 'name' => 'edit')); ?> <?php echo $this->tag->submitButton(array('Cancel', 'name' => 'edit')); ?>
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
	</b></p>

	</center>
</html>