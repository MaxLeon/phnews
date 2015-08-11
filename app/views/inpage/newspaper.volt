<!DOCTYPE html>
<html>
<body>
	<center>
	
		<div>
			
			<h2>{{value['tittle']}}</h2>			
			<font size="4">By: {{value['author']}}</font>
			<br>
			<br>
			{{value['body']}}
		</div>

		<br>
		<div>
            {{link_to("inpage/edit/"~value['id'], "Edit")}}
        </div>
		<hr>

	</center>

	</body>
</html>