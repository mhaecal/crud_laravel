<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	
	<h1>Buat Account Baru!</h1>

	<h3>Sign Up Form</h3>

	<form action="welcome.html">
		<p>First name:</p>
		<input type="text">

		<p>Last name:</p>
		<input type="text">

		<p>Gender:</p>
		<input type="radio" name="gender"> Male <br>
		<input type="radio" name="gender"> Female <br>
		<input type="radio" name="gender"> Other <br>

		<p>Nationality:</p>
		<select>
			<option>Indonesia</option>
			<option>Malaysia</option>
			<option>Singapore</option>
		</select>

		<p>Language Spoken:</p>
		<input type="checkbox"> Bahasa Indonesia <br> 
		<input type="checkbox"> English <br>
		<input type="checkbox"> Other <br>

		<p>Bio:</p>
		<textarea rows="5" cols="30"></textarea><br>

		<input type="submit" value="Sign Up">
	</form>

</body>
</html>