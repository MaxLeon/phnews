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
        {{ form('signup/sign') }}

        <fieldset>

        <div>
            <label for="uname">User Name</label>
            <div>
                {{ text_field('uname') }}
            </div>
        </div>
        
        <div>
            <label for="fname">First Name</label>
            <div>
                {{ text_field('fname') }}
            </div>
        </div>

        <div>
            <label for="lname">Last Name</label>
            <div>
                {{ text_field('lname') }}
            </div>
        </div>

        <div>
            <label for="pass">Password</label>
            <div>
                {{ password_field('pass') }}
            </div>
        </div>

        <br>
        
        <div>
            {{ submit_button('Signup') }}
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
</html>