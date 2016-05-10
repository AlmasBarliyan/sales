<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="col-lg-4 col-lg-offset-4">
		<div class="form-group">
			<input type="text" id="search-input" class="form-control" placeholder="Search" onkeyup="up()" onkeydown="down()"></input>
		</div>
		<div class="col-lg-12" id="search-results">
			
		</div>
	</div>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/search.js"></script>
</body>
</html>