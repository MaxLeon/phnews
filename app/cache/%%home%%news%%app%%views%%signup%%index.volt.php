<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Signup</title>
    </head>
    <br><br>
    <center>
    <body>
        <?php echo $this->tag->form(array('signup/sign')); ?>

        <fieldset>

        <div>
            <label for="uname">User Name</label>
            <div>
                <?php echo $this->tag->textField(array('uname')); ?>
            </div>
        </div>
        
        <div>
            <label for="fname">First Name</label>
            <div>
                <?php echo $this->tag->textField(array('fname')); ?>
            </div>
        </div>

        <div>
            <label for="lname">Last Name</label>
            <div>
                <?php echo $this->tag->textField(array('lname')); ?>
            </div>
        </div>

        <div>
            <label for="pass">Password</label>
            <div>
                <?php echo $this->tag->passwordField(array('pass')); ?>
            </div>
        </div>

        <br>
        
        <div>
            <?php echo $this->tag->submitButton(array('Signup')); ?>
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
</html>