<div class="container">
    <ol class="breadcrumb">
            <li><a href="?page=ListOfTasks">Zadania</a></li>
            <li><a href="?page=ViewTask">#BUG-1</a></li>
            <li class="active">Czas pracy</li>
    </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <?php
        $action = $_GET['action'];
        if (empty($action)) {
            $action = $_POST['action'];
        }
        if ($action == 'dodaj-czas-pracy') {
            ?>
            <div class="alert alert-success">Czas pracy został dodany do <a href="?page=ViewTask">zadania #7423</a>.</div>
            <?php
        } elseif ($action == 'edytuj-czas-pracy') {
            ?>
            <div class="alert alert-success">Czas pracy został zaktualizowany.</div>
            <?php
        } elseif ($action == 'usun-czas-pracy') {
            ?>
            <div class="alert alert-success">Czas pracy został usunięty.</div>
            <?php
        }
        ?>
        <div class="row">
            <div class="col-md-5">
                <a href="?page=ViewTask" class="btn btn-default">Powrót do zadania</a>
                <a href="?page=AddTimeEntry" class="btn btn-success">Dodaj czas pracy</a>
                <a href="#" class="btn btn-default">Eksport do CSV</a>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <form class="form-inline pull-right"><strong>Filtry:</strong> od: <input type="date" class="form-control"> do: <input type="date" class="form-control"> <input type="submit" value="Filtruj" class="btn btn-primary" onclick="return false"></form>
            </div>
        </div>
        <div class="center-block table-background-white">
            <table class="table table-hover table-responsive table-clickable">
                    <thead>
                            <tr>
                                    <th>Data</th>
                                    <th>Imię i nazwisko</th>
                                    <th>Aktywność</th>
                                    <th>Liczba godzin</th>
                                    <th>Komentarz</th>
                                    <th>Akcje</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                    <td>29.04.2013</td>
                                    <td>Admin Adminowski</td>
                                    <td>Programowanie</td>
                                    <td>5</td>
                                    <td>Dodałem moduł płatności.</td>
                                    <td>
                                            <a href="?page=EditTimeEntry" class="btn btn-primary">Edytuj</a>
                                            <a href="?page=ListTimeEntry&amp;action=usun-czas-pracy" class="btn btn-danger">Usuń</a>
                                    </td>
                            </tr>
                            <tr>
                                    <td>29.04.2013</td>
                                    <td>Admin Adminowski</td>
                                    <td>Design</td>
                                    <td>3</td>
                                    <td>Zaprojektowałem GUI.</td>
                                    <td>
                                            <a href="?page=EditTimeEntry" class="btn btn-primary">Edytuj</a>
                                            <a href="?page=ListTimeEntry&amp;action=usun-czas-pracy" class="btn btn-danger">Usuń</a>
                                    </td>
                            </tr>
                            <tr>
                                    <td>29.04.2013</td>
                                    <td>Admin Adminowski</td>
                                    <td>Programowanie</td>
                                    <td>10</td>
                                    <td>Bugfiksy.</td>
                                    <td>
                                            <a href="?page=EditTimeEntry" class="btn btn-primary">Edytuj</a>
                                            <a href="?page=ListTimeEntry&amp;action=usun-czas-pracy" class="btn btn-danger">Usuń</a>
                                    </td>
                            </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>