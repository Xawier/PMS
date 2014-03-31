<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListOfTasks">Zadania</a></li>
                <li><a href="?page=CustomFields">Dodatkowe pola</a></li>
                <li class="active">Dodaj nowe pole</li>
        </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container">
                <div class="center-block">
                        <form class="form-horizontal" role="form">
                                <div class="form-group">
                                        <label for="inputFieldName" class="col-sm-2 control-label">Nazwa</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputFieldName" placeholder="Nazwa dodatkowego pola" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputType" class="col-sm-2 control-label">Typ</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputType">
                                                        <option>Tekst</option>
                                                        <option>Opis</option>
                                                        <option>Wybór</option>
                                                </select>
                                        </div>
                                </div>

                                <div class="form-group form-inline">
                                        <label for="inputLength" class="col-sm-2 control-label">Min - Max długość</label>
                                        <div class="col-sm-10">
                                                <input type="number" class="form-control" id="inputLengthMin" placeholder="" min="0" value="0" required>
                                                <input type="number" class="form-control" id="inputLengthMax" placeholder="" min="0" value="0" required> (0 oznacza brak limitów)
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputVersion" class="col-sm-2 control-label">Wzorzec</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputVersion" placeholder="Np. ^[a-zA-Z]+$" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputBuildNumber" class="col-sm-2 control-label">Wartość domyślna</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputBuildNumber" placeholder="Np. true" required>
                                        </div>
                                </div>
                                <br/>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Dodaj pole</button>
                                        </div>
                                </div>

                        </form>
                </div>
        </div>
</div>