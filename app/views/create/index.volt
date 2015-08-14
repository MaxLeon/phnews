<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<body>
        {{ form('create') }}

        <fieldset>

        <div>
            <font size=6> <label for="tittle">Tittle</label> </font>
            <div>
                {{ text_field('tittle') }}
            </div>
        </div>
        <br>
        <div>
            <font size=6> <label for="author">Author</label> </font>
            <div>
                {{ text_field('author') }}
            </div>
        </div>
        <br>
        <div>
            <div>
                {{ text_area('body',"cols": "80", "rows": 20) }}
            </div>
        </div>

        <br>
        
        <div>
            {{ submit_button('Create', "name": 'create')}}  {{ submit_button('Cancel', "name": 'create')}}
        </div>
        <br>
        <div><font color="#2E9AFE">{{err}}</font></div>
    
    	</fieldset>
	</form>
    </center>
    </body>
	</b></p>

	</center>
</html>