<div class="container">
    <ol class="breadcrumb">
            <li class="active">Zapytania</li>
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
        if ($action == 'dodaj-zapytanie') {
            ?>
            <div class="alert alert-success">Zapytanie zostało dodane do bazy.</div>
            <?php
        } elseif ($action == 'edytuj-zapytanie') {
            ?>
            <div class="alert alert-success">Zapytanie zostało zaktualizowane.</div>
            <?php
        } elseif ($action == 'usun-zapytanie') {
            ?>
            <div class="alert alert-success">Zapytanie zostało usunięte.</div>
            <?php
        }
        ?>
        <a href="?page=AddQuery" class="btn btn-success">Dodaj zapytanie</a>
        <div class="center-block table-background-white">
            <table class="table table-hover table-responsive table-clickable">
                    <thead>
                            <tr>
                                    <th>Rodzaj zapytania</th>
                                    <th>Projekt</th>
                                    <th>Nazwa zapytania</th>
                                    <th>Opis</th>
                                    <th>Prywatność</th>
                                    <th>Działania</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                    <td>Lista zadań</td>
                                    <td>Projekt testowy</td>
                                    <td>Zapytanie 1</td>
                                    <td>To jest moje pierwsze zapytanie.</td>
                                    <td>publiczne</td>
                                    <td>
                                            <a href="?page=EditQuery" class="btn btn-primary">Edytuj</a>
                                            <a href="?page=ListQueries&amp;action=usun-zapytanie" class="btn btn-danger">Usuń</a>
                                    </td>
                            </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>