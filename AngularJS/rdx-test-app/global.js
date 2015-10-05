angular.module('myApp.global', [])
.controller('GlobalCtrl', ['$scope', function(scope) {
    scope.siteTitle = "";
    scope.baseUrl = "";
}]);