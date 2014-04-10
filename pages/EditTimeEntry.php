<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListOfTasks">Zadania</a></li>
                <li><a href="?page=ViewTask">#BUG-1</a></li>
                <li><a href="?page=ListTimeEntry">Czas pracy</a></li>
                <li class="active">Edytuj czas pracy</li>
        </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container">
                <div class="center-block">
                        <form class="form-horizontal" role="form" action="?page=ListTimeEntry" method="post">
                                <input type="hidden" name="action" value="edytuj-czas-pracy" />
                                <div class="form-group">
                                        <label for="inputProject" class="col-sm-2 control-label">Projekt</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="inputProject" disabled="disabled">
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
                                        <label for="inputTaskNumer" class="col-sm-2 control-label">Numer zadania</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputTaskNumer" disabled="disabled" value="7423" />
                                                <span class="help-block">#7423: Zadanie pierwsze, coś nie działa</span>
                                        </div>
                                </div>
                                <hr/>
                                <div class="form-group">
                                        <label for="inputActivity" class="col-sm-2 control-label">Działanie</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputActivity">
                                                        <option>Programowanie</option>
                                                        <option>Projektowanie</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputDate" class="col-sm-2 control-label">Data</label>
                                        <div class="col-sm-10">
                                                <input type="date" class="form-control" id="inputDate" value="2013-04-29" required="required">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputNumberOfHours" class="col-sm-2 control-label">Liczba godzin</label>
                                        <div class="col-sm-10">
                                                <input type="number" class="form-control" id="inputNumberOfHours" value="5" required="required">
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputComment" class="col-sm-2 control-label">Komentarz</label>
                                        <div class="col-sm-10">
                                                <textarea class="form-control" id="inputComment" rows="5">Dodałem moduł płatności.</textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Edytuj czas pracy</button>
                                                <a href="?page=ListTimeEntry" class="btn btn-default">Anuluj</a>
                                        </div>
                                </div>

                        </form>
                </div>
        </div>
</div>