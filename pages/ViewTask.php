<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListOfTasks">Zadania</a></li>
                <li><a href="?page=ProjectOverview">Projekt testowy</a></li>
                <li class="active">#BUG-1</li>
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
                                                <span class="navbar-brand brand"><span class="label label-warning">Bug</span> Zadanie pierwsze, coś nie działa</span>
                                        </div>
                                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
                                                <a href="?page=EditTask">
                                                        <button type="button" class="btn btn-default navbar-btn">Edycja</button>
                                                </a> 
                                                <button type="button" class="btn btn-default navbar-btn">Komentarz</button> 
                                                <button type="button" class="btn btn-default navbar-btn">Przydziel osobę</button>
                                                <div class="btn-group">
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                                Więcej <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                                <li><a href="#">Dodaj załączniki</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Dodaj do obserwowanych</a></li>
                                                                <li><a href="#">Pokaż obserwujących</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Utwórz podzadanie</a></li>
                                                                <li><a href="#">Zmień w podzadanie</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Przenieś</a></li>
                                                                <li><a href="#">Skopiuj do innego projektu</a></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </div>
                        </nav>
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                        <li class="active"><a href="#home" data-toggle="tab">Szczegóły</a></li>
                        <li><a href="#profile" data-toggle="tab">Historia zmian</a></li>
                        <li><a href="#messages" data-toggle="tab">Komentarze</a></li>
                        <li><a href="#settings" data-toggle="tab">Obserwujący</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content tab-content-white">
                        <div class="tab-pane active" id="home">
                                <h3><span class="glyphicon glyphicon-info-sign"></span> Szczegóły</h3>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-1 col-md-3 details-label">Priorytet:</div>
                                        <div class="col-md-2 col-md-6">Wysoki</div>
                                        <div class="col-md-1 col-md-3 details-label">Status:</div>
                                        <div class="col-md-2 col-md-6">Analiza</div>
                                </div>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-1 col-md-3 details-label">Typ:</div>
                                        <div class="col-md-2 col-md-6">Bug</div>
                                        <div class="col-md-1 col-md-3 details-label">Rozwiązanie:</div>
                                        <div class="col-md-2 col-md-6">Nierozwiązany</div>
                                </div>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-1 col-md-3 details-label">Wersje:</div>
                                        <div class="col-md-2 col-md-6">2.0</div>
                                        <div class="col-md-1 col-md-3 details-label">Etykiety:</div>
                                        <div class="col-md-4 col-md-6"><kbd>Jakiś label</kbd><kbd>Inna etykieta</kbd></div>
                                </div>
                                <h3><span class="glyphicon glyphicon-font"></span> Dokładny opis</h3>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper eros id massa pretium varius. Phasellus iaculis placerat rutrum. Maecenas facilisis odio libero, non tincidunt turpis ultricies id. Nam scelerisque ligula vel est posuere, ultricies imperdiet elit eleifend. Etiam eu nibh sem. Vestibulum laoreet sollicitudin lorem, nec facilisis orci posuere sit amet. Aenean suscipit risus elementum eros vehicula consectetur. Sed eu venenatis nisl, et accumsan lorem. Etiam ac mollis sapien. Fusce scelerisque orci non felis volutpat porta. Suspendisse at nisi.
                                <h3><span class="glyphicon glyphicon-user"></span> Osoby</h3>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-2 col-md-3 details-label">Przypisana osoba:</div>
                                        <div class="col-md-2 col-md-6">Michał Kot</div>
                                        <div class="col-md-2 col-md-3 details-label">Przypisana przez:</div>
                                        <div class="col-md-2 col-md-6">Grzegorz Pała</div>
                                        <div class="col-md-2 col-md-3 details-label">Recenzent:</div>
                                        <div class="col-md-2 col-md-6">Grzegorz Pała</div>
                                </div>
                                <h3><span class="glyphicon glyphicon-calendar"></span> Daty</h3>
                                <div class="row show-grid row-with-space">
                                        <div class="col-md-2 col-md-3 details-label">Data utworzenia:</div>
                                        <div class="col-md-2 col-md-6">13.03.2014</div>
                                        <div class="col-md-2 col-md-3 details-label">Uaktualniono:</div>
                                        <div class="col-md-2 col-md-6">31.03.2014</div>
                                </div>
                                <h3><span class="glyphicon glyphicon-paperclip"></span> Załączniki</h3>
                                Brak załączników.
                        </div>
                        <div class="tab-pane" id="profile">...</div>
                        <div class="tab-pane" id="messages">...</div>
                        <div class="tab-pane" id="settings">...</div>
                </div>

        </div>
</div>