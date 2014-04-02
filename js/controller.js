        var app = angular.module("app", ["xeditable", "ngMockE2E"]);
        app.run(function(editableOptions) {
            editableOptions.theme = 'bs3';
        });
        
        app.controller('Ctrl', function($scope, $filter, $http) {
            // Stałe pola
            $scope.issues = [
                {id: 1, name: 'Bug', map: 2},
                {id: 2, name: 'Feature', map: 1},
                {id: 3, name: 'Support', map: 1}
            ]; 
            $scope.documents = [
                {id: 1, name: 'User documentation', default: true, activity: false},
                {id: 2, name: 'Technical documentation', default: true, activity: false},
            ]; 
            $scope.priorities = [
                {id: 1, name: 'Low', default: false, activity: true},
                {id: 2, name: 'Normal', default: true, activity: true},
                {id: 3, name: 'High', default: false, activity: true},
                {id: 4, name: 'Urgent', default: false, activity: true},
                {id: 5, name: 'Immedite', default: false, activity: true},
            ]; 
            $scope.times = [
                {id: 1, name: 'Design', default: false, activity: true},
                {id: 2, name: 'Development', default: false, activity: true},
            ]; 
             $scope.maps = [
                {value: 1, text: 'TAK'},
                {value: 2, text: 'NIE'},
            ]; 
            $scope.fields = [
                {value: 1, text: 'Przypisany do'},
                {value: 2, text: 'Kategoria'},
                {value: 3, text: 'Wersja docelowa'},
                {value: 4, text: 'Zagadnienie nadrzędne'},
                {value: 5, text: 'Data rozpoczęcia'},
                {value: 6, text: 'Data oddania'},
                {value: 7, text: 'Szacowany czas'},
                {value: 8, text: '% Wykonane'}
            ]; 
            $scope.statuses = [
                {id: 1, name: 'New', default: true, close: false},
                {id: 2, name: 'In Progress', default: true, close: false},
                {id: 3, name: 'Resolved', default: false, close: true},
                {id: 4, name: 'Feedback', default: false, close: true},
                {id: 5, name: 'Closed', default: false, close: false},
                {id: 6, name: 'Rejected', default: false, close: true}
            ]; 
            $scope.save = function(data, id) {
            //$scope.document not updated yet
                angular.extend(data, {id: id});
                return $http.post('/save', data);
            };
            $scope.showMap = function(issue) {
                var selected = [];
                    if(issue.map) {
                        selected = $filter('filter')($scope.maps, {value: issue.map});
                    }
                    return selected.length ? selected[0].text : '';
            };
            $scope.showFields = function(issue) {
                var checked = [];
                    if(issue.field) {
                        checked = $filter('filter')($scope.fields, {value: issue.field});
                    }
                    return checked.length ? checked[0].text : '';
            };
            // remove issue
            $scope.removeissue = function(index) {
                $scope.issues.splice(index, 1);
            };
            // remove status
            $scope.removestatus = function(index) {
                $scope.statuses.splice(index, 1);
            };
            // remove document
            $scope.removedocument = function(index) {
                $scope.documents.splice(index, 1);
            };
            // remove priority
            $scope.removepriority = function(index) {
                $scope.priorities.splice(index, 1);
            };
            // remove time tracking
            $scope.removetime = function(index) {
                $scope.times.splice(index, 1);
            };
            // add issue
            $scope.addissue = function() {
                $scope.inserted = {
                    id: $scope.issues.length+1,
                    name: '',
                };
                $scope.issues.push($scope.inserted);
            };
            // add status
            $scope.addstatus = function() {
                $scope.inserted = {
                    id: $scope.statuses.length+1,
                    name: '',
                };
                $scope.statuses.push($scope.inserted);
            };
            // add document
            $scope.adddocument = function() {
                $scope.inserted = {
                    id: $scope.documents.length+1,
                    name: '',
                };
                $scope.documents.push($scope.inserted);
            };
            // add priority
            $scope.addpriority = function() {
                $scope.inserted = {
                    id: $scope.priorities.length+1,
                    name: '',
                };
                $scope.priorities.push($scope.inserted);
            };
            // add time tracking
            $scope.addtime = function() {
                $scope.inserted = {
                    id: $scope.times.length+1,
                    name: '',
                };
                $scope.times.push($scope.inserted);
            };
        });

        app.controller('CheckboxCtrl', function($scope) {
            $scope.document = {
                
            };  
        });
        // --------------- mock $http requests ----------------------
        app.run(function($httpBackend) {
            
            $httpBackend.whenPOST(/\/save/).respond(function(method, url, data) {
                data = angular.fromJson(data);
                return [200, {document: 'ok'}];
            });
        });
