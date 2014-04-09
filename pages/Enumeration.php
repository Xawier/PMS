	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Strona Główna</a></li>
            <li class="active">Wyliczenia</li>
		</ol>
	</div>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
        <ol class="breadcrumb container change-pos">                                 
            <li class="active">Wyliczenia</li>                                    
        </ol>  
		<div class="container">
			<div class="center-block table-responsive table-background-white" >
                <div class="center-block">
                    <div ng-app="app" ng-controller="Ctrl">
                    <!-- Kategorie dokumentów -->
                        <h3>Kategorie dokumentów</h3>
                        <div class="add_enumeration">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addEnumeration"><i class="fa fa-plus-square"></i> Dodaj nowy słownik</button>
                        </div>
                        
                        <div class="modal fade" id="addEnumeration" tabindex="-1" role="dialog" aria-labelledby="addEnumerationLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="addEnumerationLabel">Dodawanie nowego słownika</h4>
                                    </div>
                                    <div class="modal-body">
                                     <label>Nazwa nowego słownika</label><br />
                                     <input type="text" placeholder="Wpisz nazwę nowego słownika" class="form-control">
                                     <br /><br /><br />
                                     <label>Nazwa użytkownika</label><br />
                                          <select class="form-control">
                                            <option>Username #1</option>
                                            <option>Username #2</option>
                                            <option>Username #3</option>
                                          </select>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
                                    <button type="button" class="btn btn-primary">Zapisz zmiany</button>
                                </div>
                            </div>
                        </div>
                    </div>
				    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Nazwa</th>
                                <th style="width: 15%">Domyślny Status</th>
                                <th style="width: 15%">Aktywne</th>
                                <th style="width: 15%">Sortuj</th>
                                <th style="width: 15%">Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="document in documents" class="table-clickable">
                                <td>
                                    <a href="#"><span editable-text="document.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, document.id)" e-required e-placeholder="Nazwa wartości">
                                    {{ document.name || '' }}
                                    </span></a>
                                </td>
                                <td>
                                    <input type="radio" name="defaultstatus" />
                                </td>
                                <td>
                                    <span editable-checkbox="document.map" e-name="map" e-form="rowform" onbeforesave="checkName($data, map.id)" >
                                    {{ document.map && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="save($data, document.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == document">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-ban"></i></button>
                                    </form>
                                    <div class="buttons" ng-show="!rowform.$visible">
                                        <button class="btn btn-primary" ng-click="rowform.$show()"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" ng-click="removedocument($index)"><i class="fa fa-trash-o"></i></button>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success" ng-click="adddocument()"><i class="fa fa-plus-circle"></i> Nowa wartość</button>
                    <!-- Kategorie dokumentów -->
                    <!-- Priorytety zagadnień -->
                    <h3>Priorytety zagadnień</h3>
				    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Nazwa</th>
                                <th style="width: 15%">Domyślny Status</th>
                                <th style="width: 15%">Aktywne</th>
                                <th style="width: 15%">Sortuj</th>
                                <th style="width: 15%">Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="priority in priorities" class="table-clickable">
                                <td>
                                    <a href="#"><span editable-text="priority.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, priority.id)" e-required e-placeholder="Nazwa wartości">
                                    {{ priority.name || '' }}
                                    </span></a>
                                </td>
                                <td>
                                   <input type="radio" name="defaultstatus" />
                                </td>
                                <td>
                                    <span editable-checkbox="priority.activity" e-name="default" e-form="rowform" onbeforesave="checkName($data, activity.id)" >
                                    {{ priority.activity && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="savepriority($data, priority.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == priority">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-ban"></i></button>
                                    </form>
                                    <div class="buttons" ng-show="!rowform.$visible">
                                        <button class="btn btn-primary" ng-click="rowform.$show()"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" ng-click="removepriority($index)"><i class="fa fa-trash-o"></i></button>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success" ng-click="addpriority()"><i class="fa fa-plus-circle"></i> Nowa wartość</button>
                    <!-- Priorytety zagadnień -->
                    
                    <!-- Śledzenie czasu -->
                    <h3>Działania (śledzenie czasu)</h3>
				    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 40%;">Nazwa</th>
                                <th style="width: 15%">Domyślny Status</th>
                                <th style="width: 15%">Aktywne</th>
                                <th style="width: 15%">Sortuj</th>
                                <th style="width: 15%">Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="time in times" class="table-clickable">
                                <td>
                                    <a href="#"><span editable-text="time.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, time.id)" e-required e-placeholder="Nazwa wartości">
                                    {{ time.name || '' }}
                                    </span></a>
                                </td>
                                <td>
                                    <input type="radio" name="defaultstatus" />
                                </td>
                                <td>
                                    <span editable-checkbox="time.activity" e-name="default" e-form="rowform" onbeforesave="checkName($data, activity.id)" >
                                    {{ time.activity && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="savetime($data, time.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == time">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-repeat"></i></button>
                                    </form>
                                    <div class="buttons" ng-show="!rowform.$visible">
                                        <button class="btn btn-primary" ng-click="rowform.$show()"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" ng-click="removetime($index)"><i class="fa fa-trash-o"></i></button>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success" ng-click="addtime()"><i class="fa fa-plus-circle"></i> Nowa wartość</button>
                    <!-- Śledzenie czasu -->
                    <div class="add_enumeration">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addEnumeration"><i class="fa fa-plus-square"></i> Dodaj nowy słownik</button>
                        </div>
                    </div>
			     </div>
			</div>
		</div>
	</div>
