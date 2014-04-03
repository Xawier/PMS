	<div class="container">
		<ol class="breadcrumb">
			<li><a href="#">Strona Główna</a></li>
            		<li class="active">Przejścia stanów</li>
		</ol>
	</div>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
        <ol class="breadcrumb container change-pos">                                 
            <li class="active">Przejścia stanów</li>  
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
                                <th>Obecny Status</th>
                                <th></th>
                                <th></th>
                                <th>Uprawnione nowe statusy</th>
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
                            <tr ng-repeat="status in statuses">
                                <td>
                                    <span editable-text="status.name" e-name="name" e-form="rowform"  onbeforesave="checkName($data, status.id)" e-required >
                                    {{ status.name || '' }}
                                    </span>
                                </td>
				<td ng-repeat="status in statuses" style="text-align:center;">
				    <input type="checkbox"> 
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
