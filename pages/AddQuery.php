<script type="text/javascript">
function dodajKryterium() {
    var html = '<div class="form-group"><div class="col-sm-3 col-sm-offset-2"><select class="form-control" rows="5"><option>user_id</option><option>issue_id</option><option>start_date</option><option>hours</option><option>comment</option></select></div><div class="col-sm-2"><select class="form-control" rows="5"><option>=</option><option>&ne;</option><option>&gt;</option><option>&lt;</option><option>&ge;</option><option>&le;</option></select></div><div class="col-sm-4"><input type="text" class="form-control" /></div><div class="col-sm-1"><a href="#" class="btn btn-danger" onclick="usunKryterium(this); return false">&times;</a></div></div>';
    $(html).hide().appendTo('#kryteria').slideDown();
}
function usunKryterium(element) {
    $(element).parent().parent().fadeOut();
}
</script>
<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListQueries">Zapytania</a></li>
                <li class="active">Dodaj zapytanie</li>
        </ol>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
        <div class="container">
                <div class="center-block">
                        <form class="form-horizontal" role="form" action="?page=ListQueries" method="post">
                                <input type="hidden" name="action" value="dodaj-zapytanie" />
                                <div class="form-group">
                                        <label for="inputQueryType" class="col-sm-2 control-label">Rodzaj zapytania</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputQueryType">
                                                    <option>Czas pracy</option>
                                                    <option>Projekty</option>
                                                    <option>Użytkownicy</option>
                                                    <option>Zadania</option>
                                                </select>
                                        </div>
                                </div>
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
                                        <label for="inputQueryName" class="col-sm-2 control-label">Nazwa zapytania</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputQueryName" />
                                        </div>
                                </div>
                                <div id="kryteria">
                                    <div class="form-group">
                                            <label class="col-sm-2 control-label">Kryteria zapytania</label>
                                            <div class="col-sm-3">
                                                    <select class="form-control">
                                                            <option>user_id</option>
                                                            <option>issue_id</option>
                                                            <option>start_date</option>
                                                            <option>hours</option>
                                                            <option>comment</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-2">
                                                    <select class="form-control">
                                                            <option>=</option>
                                                            <option>&ne;</option>
                                                            <option>&gt;</option>
                                                            <option>&lt;</option>
                                                            <option>&ge;</option>
                                                            <option>&le;</option>
                                                    </select>
                                            </div>
                                            <div class="col-sm-4">
                                                    <input type="text" class="form-control" />
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10"><a href="#" class="btn btn-success" onclick="dodajKryterium(); return false">Dodaj kryterium</a></div>
                                </div>
                                <div class="form-group">
                                        <label for="inputColumns" class="col-sm-2 control-label">Kolumny wyjściowe</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputColumns" multiple="multiple">
                                                    <option>user_id</option>
                                                    <option>issue_id</option>
                                                    <option>start_date</option>
                                                    <option>hours</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputProject" class="col-sm-2 control-label">Prywatność zapytania</label>
                                        <div class="col-sm-10">
                                            <label style="font-weight: normal"><input type="checkbox" /> Niech to zapytanie będzie zapytaniem <strong>publicznym</strong>.</label>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputProject" class="col-sm-2 control-label">Opis <small>(opcjonalny)</small></label>
                                        <div class="col-sm-10">
                                            <textarea rows="6" class="form-control"></textarea>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Dodaj zapytanie</button>
                                                <a href="?page=ListQueries" class="btn btn-default">Anuluj</a>
                                        </div>
                                </div>
                        </form>
                </div>
        </div>
</div>