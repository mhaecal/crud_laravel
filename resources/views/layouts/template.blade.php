<!DOCTYPE html>
<html>
<head>
	<title>LaraHub</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<!-- As a link -->
<nav class="navbar navbar-dark bg-dark">
	<div class="container">
	  <a class="navbar-brand" href="{{ url('pertanyaan') }}">LaraHub</a>
	</div>
</nav>

@yield('content')
	
</body>
</html>