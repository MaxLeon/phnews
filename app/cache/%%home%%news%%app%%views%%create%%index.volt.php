<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<body>
        <?php echo $this->tag->form(array('create/new')); ?>

        <fieldset>

        <div>
            <font size=6> <label for="tittle">Tittle</label> </font>
            <div>
                <?php echo $this->tag->textField(array('tittle')); ?>
            </div>
        </div>
        <br>
        <div>
            <font size=6> <label for="author">Author</label> </font>
            <div>
                <?php echo $this->tag->textField(array('author')); ?>
            </div>
        </div>
        <br>
        <div>
            <div>
                <?php echo $this->tag->textArea(array('body', 'cols' => '80', 'rows' => 20)); ?>
            </div>
        </div>

        <br>
        
        <div>
            <?php echo $this->tag->submitButton(array('Create')); ?>
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
	</b></p>

	</center>
</html>