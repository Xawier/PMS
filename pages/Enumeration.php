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
				    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nazwa</th>
                                <th>Domyślny status</th>
                                <th>Aktywne</th>
                                <th>Sortuj</th>
                                <th>Akcja</th>
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
                                    <span editable-checkbox="document.default" e-name="default" e-form="rowform" onbeforesave="checkName($data, default.id)" >
                                    {{ document.default && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <span editable-checkbox="document.activity" e-name="default" e-form="rowform" onbeforesave="checkName($data, activity.id)" >
                                    {{ document.activity && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-amount-asc "></i></a>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                    <a href='#'><i class="fa fa-sort-amount-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="save($data, document.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == document">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-repeat"></i></button>
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
                                <th>Nazwa</th>
                                <th>Domyślny status</th>
                                <th>Aktywne</th>
                                <th>Sortuj</th>
                                <th>Akcja</th>
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
                                    <span editable-checkbox="priority.default" e-name="default" e-form="rowform" onbeforesave="checkName($data, default.id)" >
                                    {{ priority.default && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <span editable-checkbox="priority.activity" e-name="default" e-form="rowform" onbeforesave="checkName($data, activity.id)" >
                                    {{ priority.activity && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-amount-asc "></i></a>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                    <a href='#'><i class="fa fa-sort-amount-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="savepriority($data, priority.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == priority">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-repeat"></i></button>
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
                                <th>Nazwa</th>
                                <th>Domyślny status</th>
                                <th>Aktywne</th>
                                <th>Sortuj</th>
                                <th>Akcja</th>
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
                                    <span editable-checkbox="time.default" e-name="default" e-form="rowform" onbeforesave="checkName($data, default.id)" >
                                    {{ time.default && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <span editable-checkbox="time.activity" e-name="default" e-form="rowform" onbeforesave="checkName($data, activity.id)" >
                                    {{ time.activity && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-amount-asc "></i></a>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                    <a href='#'><i class="fa fa-sort-amount-desc"></i></a>
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
                    </div>
			     </div>
			</div>
		</div>
	</div>
