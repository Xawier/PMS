<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListOfTasks">Zadania</a></li>
                <li class="active">Edytuj zadanie</li>
        </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container">
                <div class="center-block">
                        <form class="form-horizontal" role="form">
                                <div class="form-group">
                                        <label for="inputProject" class="col-sm-2 control-label">Projekt</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputProject">
                                                        <optgroup label="Ostatnio wybierane projekty">
                                                                <option>Projekt testowy</option>
                                                                <option>Most recent one</option>
                                                        </optgroup>
                                                        <optgroup label="Pozostałe">
                                                                <option>Another recent project</option>
                                                        </optgroup>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputIssueType" class="col-sm-2 control-label">Typ zadania</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputIssueType">
                                                        <optgroup label="Typy zadań">
                                                                <option>Zadanie</option>
                                                                <option>Zewnętrzne zadanie</option>
                                                                <option>Bug</option>
                                                                <option>Wymaganie</option>
                                                                <option>Żądanie</option>
                                                                <option>Poprawka</option>
                                                                <option>Wydarzenie</option>
                                                                <option>Klient</option>
                                                        </optgroup>
                                                </select>
                                                <span class="help-block">Niektóre typy zadań są niedostępne w związku z definicją formularza lub ustawień przepływu.</span>
                                        </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                        <label for="inputSummary" class="col-sm-2 control-label">Podsumowanie</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSummary" placeholder="Nazwa, tytuł lub krótkie podsumowanie" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputDescription" class="col-sm-2 control-label">Dokładny opis</label>
                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="inputDescription" placeholder="Dokładny opis dodawanego zadania" rows="5" required></textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputPriority" class="col-sm-2 control-label">Priorytet</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputPriority">
                                                        <option>Blocker</option>
                                                        <option>Krytyczny</option>
                                                        <option>Wysoki</option>
                                                        <option>Normalny</option>
                                                        <option>Niski</option>
                                                        <option>Bardzo niski</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputComponentName" class="col-sm-2 control-label">Moduł/komponent</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputComponentName" placeholder="Nazwa komponentu / modułu, którego dotyczy zadanie" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputAttachment" class="col-sm-2 control-label">Załącznik</label>
                                        <div class="col-sm-10">
                                                <input type="file" class="form-control" id="inputAttachment" placeholder="Obraz, dokument etc..." required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputVersion" class="col-sm-2 control-label">Wersja</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputVersion" placeholder="Numer wersji, której dotyczy zadanie" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputBuildNumber" class="col-sm-2 control-label">Build</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputBuildNumber" placeholder="Numer builda wersji" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputDeadline" class="col-sm-2 control-label">Deadline</label>
                                        <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputDeadline" placeholder="dd-mm-yyyy" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputLabels" class="col-sm-2 control-label">Etykiety</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputLabels" placeholder="Etykiety zadania" required>
                                        </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                        <label for="inputCustomFields" class="col-sm-2 control-label">Dodatkowe pola</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputCustomFields">
                                                        <option>Wybierz</option>
                                                        <option>Następnik</option>
                                                        <option>Opis klienta</option>
                                                        <option>Źródła pomocy</option>
                                                </select>
                                        </div>
                                </div>
                                <div id="customFields">
                                </div>
                                <br/>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Zapisz zmiany</button>
                                        </div>
                                </div>

                        </form>
                </div>
        </div>
</div>