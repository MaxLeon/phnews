<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
    </head>
    <br><br>
    <center>
    <body>
        <?php echo $this->tag->form(array('login/log')); ?>

        <fieldset>
        
        <div>
            <label for="uname">User Name</label>
            <div>
                <?php echo $this->tag->textField(array('uname')); ?>
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
            <?php echo $this->tag->submitButton(array('Login', 'name' => 'login')); ?>
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
</html>