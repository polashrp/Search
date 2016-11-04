<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Search Box</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Coustom Css -->
		<link href="css/style.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<div class="row">
				<div class="col-lg-12">
						<div class="page-header">
								<h1>jQuery Searchable Plugin</h1>
						</div>
						<p>You can find the source of this plugin at <a href="http://github.com/stidges/jquery-searchable" target="_blank">Github</a> (http://github.com/stidges/jquery-searchable)!</p>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
						<h3><a href="www.androidwebseo.com">Habib</a></h3>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-4 col-lg-offset-4">
						<input type="search" id="search" value="" class="form-control" placeholder="Search using Fuzzy searching">
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
						<table class="table" id="table">
								<thead>
										<tr>
												<th>First column</th>
												<th>Second column</th>
												<th>Third column</th>
										</tr>
								</thead>
								<tbody>
										<tr>
												<td>Introducing</td>
												<td>jQuery</td>
												<td>Searchable</td>
										</tr>
										<tr>
												<td>Lorem</td>
												<td>Ipsum</td>
												<td>Dolor</td>
										</tr>
										<tr>
												<td>Some</td>
												<td>More</td>
												<td>Data</td>
										</tr>
								</tbody>
						</table>
						<hr>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-12">
						<h3>Non-table example</h3>
				</div>
		</div>
		<div class="row">
				<div class="col-lg-4 col-lg-offset-4">
						<input type="search" id="container-search" value="" class="form-control" placeholder="Search...">
				</div>
		</div>
</div>
<div class="container" id="searchable-container">
		<div class="row row-padding">
				<div class="col-xs-4">Col 1</div>
				<div class="col-xs-4">Col 2</div>
				<div class="col-xs-4">Col 3</div>
		</div>
		<div class="row row-padding">
				<div class="col-xs-4">Another row</div>
				<div class="col-xs-4">With some</div>
				<div class="col-xs-4">Other data</div>
		</div>
		<div class="row row-padding">
				<div class="col-xs-4">Lorem</div>
				<div class="col-xs-4">Ipsum</div>
				<div class="col-xs-4">Dolor</div>
		</div>
		<div class="row row-padding">
				<div class="col-xs-4">Foo</div>
				<div class="col-xs-4">Bar</div>
				<div class="col-xs-4">Baz</div>
		</div>
</div>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<!--This is Coustom js-->
		<script type="text/javascript" src="js/search.main.js"></script>
		<script type="text/javascript" src="js/jquery.searchable.js"></script>
	</body>
</html>