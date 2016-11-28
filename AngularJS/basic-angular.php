<!DOCTYPE html>
<html lang="en">
<head>
    <title>Angular Basics</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script>
        (function () {
            angular.module('myApp',[])
                .controller('MainController', MainController);

            function MainController($http,$scope){
                $scope.data = [];
                $scope.error = [];
                $scope.someVar = true;

                $http.get('/Sandbox/AngularJS/server-side-handler.php').then(
                    function (response) {
                        $scope.data = response.data;
                    },
                    function (response) {
                        $scope.error = response.data;
                    }
                );
            }
        })();
    </script>
</head>
<body ng-app="myApp" ng-controller="MainController">

<div ng-class="{'green': someVar==true}">some thing</div>

<h3>Data:</h3>
<pre>{{data | json}}</pre>

<h3>Errors:</h3>
<pre>{{error | json}}</pre>

</body>
</html>