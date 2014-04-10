	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Strona Główna</a></li>
            <li class="active">Statusy zagadnień</li>
		</ol>
	</div>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
        <ol class="breadcrumb container change-pos">                                 
            <li class="active">Statusy zagadnień</li>                                    
        </ol>  
		<div class="container">
			<div class="center-block table-responsive table-background-white" >
                <div class="center-block">
                    <div ng-app="app" ng-controller="Ctrl">
				    <table class="table table-striped table-clickable">
                        <thead>
                            <tr>
                                <th style="width: 30%">Status</th>
                                <th style="width: 20%">Domyślny Status</th>
                                <th style="width: 20%">Zagadnienia zamknięte</th>
                                <th style="width: 15%">Sortuj</th>
                                <th style="width: 15%">Akcja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr ng-repeat="status in statuses">
                                <td>
                                    <span editable-text="status.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, status.id)" e-required >
                                    {{ status.name || '' }}
                                    </span>
                                </td>
                                <td>
                                    <span editable-checkbox="status.default" e-name="default" e-form="rowform" onbeforesave="checkName($data, default.id)" >
                                    {{ status.default && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <span editable-checkbox="status.close" e-name="default" e-form="rowform" onbeforesave="checkName($data, close.id)" >
                                    {{ status.close && "x" || "" }}
                                    </span>
                                </td>
                                <td>
                                    <a href='#'><i class="fa fa-sort-asc"></i></a>
                                    <a href='#'><i class="fa fa-sort-desc"></i></a>
                                </td>
                                <td style="white-space: nowrap">
                                    <form editable-form name="rowform" onbeforesave="save($data, status.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == status">
                                        <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                        <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-ban"></i></button>
                                    </form>
                                    <div class="buttons" ng-show="!rowform.$visible">
                                        <button class="btn btn-primary" ng-click="rowform.$show()"><i class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger" ng-click="removestatus($index)"><i class="fa fa-trash-o"></i></button>
                                    </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button class="btn btn-success" ng-click="addstatus()"><i class="fa fa-plus-circle"></i> Stwórz status</button>
                    </div>
			     </div>
			</div>
		</div>
	</div>
