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
        <?php echo $this->tag->form(array('signup/register')); ?>

        <fieldset>
        
        <div>
            <label for="fname">First Name</label>
            <div>
                <?php echo $this->tag->textField(array('fname')); ?>
            </div>
        </div>

        <div>
            <label for="lname">Last Name</label>
            <div>
                <?php echo $this->tag->textField(array('fname')); ?>
            </div>
        </div>

        <div>
            <label for="password">Password</label>
            <div>
                <?php echo $this->tag->passwordField(array('password')); ?>
            </div>
        </div>

        <br>
        
        <div>
            <?php echo $this->tag->submitButton(array('Login')); ?>
            <?php echo $this->tag->submitButton(array('Go Back')); ?>
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
</html>