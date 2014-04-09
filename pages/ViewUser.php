<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListUsers">Użytkownicy</a></li>
                <li class="active"><a href="?page=ViewUser">Admin</a></li>
        </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron jumbotron-padding-top-10">

        <div class="container">

                <div class="center-block">
                        <nav class="navbar navbar-default navbar-margin-top" role="navigation">
                                <div class="container-fluid">
                                        <div class="navbar-header">

                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                        <span class="sr-only">Zarządzaj</span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>

                                                </button>
                                                <span class="navbar-brand brand">Admin Adminowski</span>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
                                                <a href="?page=EditUser">
                                                        <button type="button" class="btn btn-default navbar-btn">Edycja</button>
                                                </a> 
                                        </div>
                                </div>
                        </nav>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                        <li class="active"><a href="#profile" data-toggle="tab">Profil</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content tab-content-white">
                        <div class="tab-pane active" id="profile">
                                <h3><span class="glyphicon glyphicon-info-sign"></span> Informacje</h3>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-1 col-md-3 details-label">Imię:</div>
                                        <div class="col-md-2 col-md-6">Admin</div>
                                        <div class="col-md-1 col-md-3 details-label">Nazwisko:</div>
                                        <div class="col-md-2 col-md-6">Adminowski</div>
                                </div>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-1 col-md-3 details-label">Email:</div>
                                        <div class="col-md-2 col-md-6">admin@admin.com</div>
                                        <div class="col-md-1 col-md-3 details-label">Aktywny:</div>
                                        <div class="col-md-2 col-md-6">Tak</div>
                                </div>
                                <h3><span class="glyphicon glyphicon-info-sign"></span> Projekty</h3>
                               	<ul class="list-unstyled">
                               		<li><a href="?page=ProjectOverview">Sklep internetowy</a></li>
                               		<li><a href="?page=ProjectOverview">Aplikacja mobilna</a></li>
                               	</ul>
                        </div>
                </div>

        </div>
</div>