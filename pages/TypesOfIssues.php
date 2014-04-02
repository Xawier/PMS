	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
        <ol class="breadcrumb container">
            <li class="active">Typy zagadnień</li>
        </ol>
		<div class="container">
			<div class="center-block table-responsive table-background-white">
            <div ng-app="app" ng-controller="Ctrl">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th style="width: 60%">Typ zagadnienia</th>
                            <th style="width: 20%">Sortuj</th>
                            <th style="width: 20%">Akcja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="issue in issues" class="table-clickable">
                            <td class="change">
                              <span data-toggle="modal" data-target="#myModal{{ issue.name || '' }}" editable-text="issue.name" e-name="name" e-form="rowform" onbeforesave="checkName($data, issue.id)" e-required e-placeholder="Nazwa zagadnienia" >
                              {{ issue.name || '' }}
                              </span>
                              <span editable-select="issue.map" e-name="map" e-form="rowform" e-ng-options="m.value as m.text for m in maps"></span>
                              <span editable-checklist="issue.field" e-name="field" e-form="rowform" e-ng-options="f.value as f.text for f in fields"></span>
                              
                              
                              <div class="modal fade" id="myModal{{ issue.name }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">{{ issue.name }}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Nazwa:</strong> {{ issue.name }}</p>
                                            <p><strong>Zagadnienie pokazywane na mapie:</strong> {{ showMap(issue) }}</p>
                                            <p><strong>Standard fields:</strong> </p>
                                                <ul>
                                                    <li>{{ showField(issue) }}</li>
                                                </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                              </div>                             
                            </td>
                            <td>
                                <a href='#'><i class="fa fa-sort-amount-asc "></i></a>
                                <a href='#'><i class="fa fa-sort-asc"></i></a>
                                <a href='#'><i class="fa fa-sort-desc"></i></a>
                                <a href='#'><i class="fa fa-sort-amount-desc"></i></a>
                            </td>
                            <td style="white-space: nowrap">
                                <form editable-form name="rowform" onbeforesave="save($data, issue.id)" ng-show="rowform.$visible" class="form-buttons form-inline" shown="inserted == issue">
                                    <button type="submit" ng-disabled="rowform.$waiting" class="btn btn-primary"><i class="fa fa-floppy-o"></i></button>
                                    <button type="button" ng-disabled="rowform.$waiting" ng-click="rowform.$cancel()" class="btn btn-default"><i class="fa fa-repeat"></i></button>
                                </form>
                                <div class="buttons" ng-show="!rowform.$visible">
                                    <button class="btn btn-primary" ng-click="rowform.$show()"><i class="fa fa-pencil-square-o"></i></button>
                                    <button class="btn btn-danger" ng-click="removeissue($index)"><i class="fa fa-trash-o"></i></button>
                                </div>  
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-success" ng-click="addissue()"><i class="fa fa-plus-circle"></i> Nowy typ zagadnienia</button>
            </div>            
			</div>
		</div>
	</div>