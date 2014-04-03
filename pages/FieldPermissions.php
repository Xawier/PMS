	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Strona Główna</a></li>
            		<li class="active">Uprawnienia pól</li>
		</ol>
	</div>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
        <ol class="breadcrumb container change-pos">                                 
            <li class="active">Uprawnienia pól</li>  
	<br>
	<br>

		<div class="half-space-container text-left">
                <form class="form-group form-inline" role="form">
                        <div class="form-group">
                                <label for="inputProject" class="control-label">Rola:&nbsp;</label>
                                <select class="form-control" id="inputProject">
                                   <option>Manger</option>
                                   <option>Developer</option>
				   <option>Reporter</option>
				   <option>Non member</option>
				   <option>Anonymous</option>
                                </select>
                        </div>

                        <div class="form-group">
                                <label for="inputProject" class="control-label">&nbsp;Typ zagadnienia:&nbsp;</label>
                                <select class="form-control" id="inputProject">
                                   <option>Bug</option>
                                   <option>Extension</option>
				   <option>Support</option>
				   <option>Technical writing</option>
				   <option>Meeting</option>
                                </select>
                        </div>

			<div class="form-group">
			<label>&nbsp;&nbsp;&nbsp;</label>
			<button class="btn btn-info">Edytuj</button>
			</div>
                </form>
      		</div>


                                  
        </ol>  
		<div class="container">
			<div class="center-block table-responsive table-background-white" >
                <div class="center-block">
                    <div ng-app="app" ng-controller="Ctrl">
				    <table class="table table-striped">
                        
			
			<thead>
                            <tr class="breadcrumb">
                                <th>Rodzaj pola</th>
                                <th></th>
                                <th></th>
                                <th>Status zagadnienia</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>

			    <tr>
				<th></th>			
                                <th ng-repeat="status in statuses">
 				  <span editable-text="status.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, status.id)" e-required >
                                    {{ status.name || '' }}
                                  </span>
				</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>
                                    Projekt
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Typ zagadnienia
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Opis
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Priorytet
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Kategoria
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Przypisany do
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Wersja docelowa
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Zagadnienie nadrzędne
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Data rozpoczęcia
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Data dodania
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>
                                <tr><td>
                                    Szacowany czas
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td></tr>	
                                <tr><td>
                                    Stopień wykonania
                                </td>
                                <td ng-repeat="status in statuses">
                               		<select class="form-control" id="inputProject">
                                   	<option></option>
                                   	<option>Read-only</option>
                                   	<option>Required</option>
                                   	<option>Hidden</option>
                               		</select>
                                </td>			
                            </tr>
                        </tbody>



                    </table>
                    <button class="btn btn-success">Zapisz</button>
                    </div>
			     </div>
			</div>
		</div>
	</div>
