<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <title ng-controller="LayoutController">Angular {{title}}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script>
        (function () {
            angular.module('myModule', []).filter('uc', function () {
                return function (input) {
                    return input.toUpperCase();
                }
            });

            angular.module('myApp', ['myModule']).controller('LayoutController', LayoutController);

            function LayoutController($scope){
                $scope.title = "Basics";
                $scope.data = "Layout data";
            }

        })();

        (function () {
            angular.module('myApp').requires.push('myModule');
            angular.module('myApp').controller('MainController', MainController);

            function MainController($http,$scope){
                $scope.data = "MainController data";
                $scope.error = [];

//                $http.get('/Sandbox/AngularJS/server-side-handler.php').then(
//                    function (response) {
//                        $scope.data = response.data;
//                    },
//                    function (response) {
//                        $scope.error = response.data;
//                    }
//                );
            }

        })();
    </script>
</head>
<body>

<aside ng-controller="LayoutController">
    <pre>{{data | uc}}</pre>
</aside>

<div ng-controller="MainController">
    <h3>Data:</h3>
    <pre>{{data | uc}}</pre>

    <h3>Errors:</h3>
    <pre>{{error | json}}</pre>
</div>

</body>
</html>