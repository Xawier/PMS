<div class="container">
        <ol class="breadcrumb">
                <li><a href="?page=ListUsers">Użytkownicy</a></li>
                <li class="active">Edytuj użytkownika</li>
        </ol>
</div>

<div class="jumbotron">
        <div class="container">
                <div class="center-block">
                        <form class="form-horizontal" role="form">
                                <div class="form-group">
                                        <label for="inputRole" class="col-sm-2 control-label">Typ</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputRole">
                                                     <option>Administrator</option>
                                                     <option>Użytkownik</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Imię</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName" placeholder="Imię" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputSurname" class="col-sm-2 control-label">Nazwisko</label>
                                        <div class="col-sm-10">
 											<input type="text" class="form-control" id="inputSurname" placeholder="Imię" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">E-mail</label>
                                        <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail" placeholder="Adres email" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputPassword" class="col-sm-2 control-label">Hasło</label>
                                        <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputEmail" placeholder="Hasło" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputPassword2" class="col-sm-2 control-label">Powtórz hasło</label>
                                        <div class="col-sm-10">
                                                <input type="password2" class="form-control" id="inputEmail" placeholder="Powtórz hasło" required>
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label for="inputStatus" class="col-sm-2 control-label">Status</label>
                                        <div class="col-sm-10">
                                                <select class="form-control" id="inputStatus">
                                                                <option>Aktywny</option>
                                                                <option>Nie aktywny</option>
                                                </select>
                                        </div>
                                </div>
                                </br>
                                <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success">Zapisz zmiany</button>
                                        </div>
                                </div>

                        </form>
                </div>
        </div>
</div>