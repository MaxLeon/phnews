<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<body>
        {{ form('inpage/edit') }}

        <fieldset>
        {{hidden_field('id', "value": id)}}
        <div>
            <font size=6> <label for="tittle">Tittle</label> </font>
            <div>
                {{ text_field('tittle', "value":tittle) }}
            </div>
        </div>
        <br>
        <div>
            <font size=6> <label for="author">Author</label> </font>
            <div>
                {{ text_field('author', "value":author) }}
            </div>
        </div>
        <br>
        <div>
            <div>
                {{ text_area('body',"cols": "80", "rows": 20, "value":body) }}
            </div>
        </div>

        <br>
        
        <div>
            {{ submit_button('Ok', "name": 'edit') }} {{ submit_button('Cancel', "name": 'edit') }}
        </div>
            
        </div>
    
    	</fieldset>
	</form>
    </center>
    </body>
	</b></p>

	</center>
</html>