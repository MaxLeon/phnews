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
        {{ form('login') }}

        <fieldset>
        
        <div>
            <label for="uname">User Name</label>
            <div>
                {{ text_field('uname') }}
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
            {{ submit_button('Login', "name":'login') }}
        </div>

        <div>
        <br>
            <font color="#2E9AFE">{{ err }}</font>
        </div>
    	</fieldset>
	</form>
    </center>
    </body>
</html>