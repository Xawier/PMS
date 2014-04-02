<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Strona Główna - PMS</title>
	<meta name="description" content="Html PMS sketch">

	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
	<div class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Nawigacja</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand brand" href="./">PMS</a>
				<p class="navbar-text actual-project-cont">
					<span class="navbar-brand-separator">/</span> 
					<a href="?page=ProjectOverview" class="navbar-actual-project">Projekt Testowy</a>
				</p>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projekty <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Aktualny projekt</li>
							<li><a href="?page=ProjectOverview">Projekt testowy</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Ostatnie projekty</li>
							<li><a href="#">Most recent one</a></li>
							<li><a href="#">Another recent project</a></li>
							<li class="divider"></li>
							<li><a href="#">Pokaż wszystkie projekty</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Zadania <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Aktualny projekt</li>
							<li><a href="?page=ListOfTasks">Lista zadań</a></li>
							<li><a href="?page=AddTask">Dodaj zadanie</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Filtry</li>
							<li><a href="#">Zadania przypisane do mnie</a></li>
							<li><a href="#">Ostatnio dodane zadania</a></li>
							<li class="divider"></li>
							<li><a href="#">Zarządzaj filtrami</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Administracja <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li class="dropdown-header">Użytkownicy</li>
							<li><a href="?page=EditUser">Dodaj użytkownika</a></li>
							<li><a href="?page=ListUsers">Lista użytkowników</a></li>
							<li class="divider"></li>
							<li><a href="?page=CustomFields">Pola Formularza</a></li>
							<li class="divider"></li>
							<li><a href="?page=TypesOfIssues">Typy Zagadnień</a></li>
							<li><a href="?page=IssuesStatus">Statusy zagadnień</a></li>
							<li><a href="?page=Enumeration">Wyliczenia</a></li>
						</ul>
					</li>
				</ul>
				<div class="navbar-form navbar-left">
					<button type="button" class="btn btn-primary" id="add-task-btn">Dodaj zadanie</button>
				</div>
				<form class="navbar-form navbar-right" role="form">
					<div class="form-group">
						<input type="text" placeholder="Wpisz szukaną frazę..." class="form-control">
					</div>
					<button type="submit" class="btn btn-success">Szukaj</button>
					<a href="?page=MyAccount" class="btn btn-info">
						<span class="glyphicon glyphicon-user"></span>
					</a>
				</form>
			</div><!--/.nav-collapse -->
		</div>
	</div>
	<?php
        $requestedPage = $_GET['page'];
        $availablePages = array_diff(scandir('pages'), array('.', '..'));
        if (!in_array($requestedPage . '.php', $availablePages)) {
            $requestedPage = 'Homepage';
        }
        require_once 'pages/' . $requestedPage . '.php';
        ?>
	<div class="container">
		<footer>
			<p>&copy; PMS 2014</p>
		</footer>
	</div> <!-- /container -->
	<script src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript">
		$("#add-task-btn").click(function(event) {
			window.location = "?page=AddTask";
		});

		$(".table-clickable").click(function(event) {
			window.location = "?page=ViewTask";
		});
	</script>
	<!-- Latest compiled and minified JavaScript -->
    <script src="js/angular.min.js"></script>
    
    <!-- Grupa Słowniki i Rejestry -->
    <script src="js/xeditable.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular-mocks.js"></script>
    <script src="js/controller.js"></script>
    <!-- Grupa Słowniki i Rejestry -->

</body>
</html>