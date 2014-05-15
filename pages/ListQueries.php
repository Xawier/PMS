<div class="container">
    <ol class="breadcrumb">
            <li class="active">Kwerendy</li>
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
        if ($action == 'dodaj-kwerende') {
            ?>
            <div class="alert alert-success">Kwerenda została dodana do bazy.</div>
            <?php
        } elseif ($action == 'edytuj-kwerende') {
            ?>
            <div class="alert alert-success">Kwerenda została zaktualizowana.</div>
            <?php
        } elseif ($action == 'usun-kwerende') {
            ?>
            <div class="alert alert-success">Kwerenda została usunięta.</div>
            <?php
        }
        ?>
        <a href="?page=AddQuery" class="btn btn-success">Dodaj kwerendę</a>
        <div class="center-block table-background-white">
            <table class="table table-hover table-responsive table-clickable">
                    <thead>
                            <tr>
                                    <th>Rodzaj kwerendy</th>
                                    <th>Projekt</th>
                                    <th>Nazwa kwerendy</th>
                                    <th>Opis</th>
                                    <th>Prywatność</th>
                                    <th>Działania</th>
                            </tr>
                    </thead>
                    <tbody>
                            <tr>
                                    <td>Lista zadań</td>
                                    <td>Projekt testowy</td>
                                    <td>Kwerenda 1</td>
                                    <td>To jest moja pierwsza kwerenda.</td>
                                    <td>publiczna</td>
                                    <td>
                                            <a href="?page=EditQuery" class="btn btn-primary">Edytuj</a>
                                            <a href="?page=ListQueries&amp;action=usun-kwerende" class="btn btn-danger">Usuń</a>
                                    </td>
                            </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>