<!DOCTYPE html>
<html>
	<center>
	<br><br>
	<p><b>
	<font size="6">
	<h1>Welcome {{name}}</h1>

	<h2>{{link_to("create", "Add a news")}} | {{link_to("logout", "Logout")}}</h2>
	</b></p>
	</font>
	
	{% for value in theNews %}
	{% include "inpage/newspaper.volt" %}
	{% endfor %}
	

	</center>
</html>