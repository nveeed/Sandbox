angular.module('myApp.products', ['ngRoute','ngSanitize'])
.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/products', {
        templateUrl: 'partials/products.html',
        controller: 'ProductsCtrl'
    });
}])
.controller('ProductsCtrl', ['$scope','$http', function(scope,$http) {
    //$("#loading-div").show();
    //$http.get(rdxTestAppGlobalVars.baseUrl+"/api/soap.php?a=category.assignedProducts&f=11").then(function (response) {
    //    scope.products = response.data;
    //    $("#loading-div").hide();
    //});
    /*$http.get("http://localhost/_Sandbox_/AngularJS/rdx-test-app/api/get-request-token.php").then(function (response) {
        var token = response.data.oauth_token;
        var secret = response.data.oauth_token_secret;
        var query = "oauth_token="+token+"&oauth_token_secret="+secret;
        var url = "http://localhost/_Sandbox_/AngularJS/rdx-test-app/api/get-access-token.php?"+query;
        $http.get(url).then(function (response) {
            var token = response.data.oauth_token;
            var secret = response.data.oauth_token_secret;
            var query = "oauth_token="+token+"&oauth_token_secret="+secret;
            var url = "http://localhost/_Sandbox_/AngularJS/rdx-test-app/api/get-data.php?"+query;
            $http.get(url).then(function (response) {
                scope.products = response.data;
                $("#loading-div").hide();
            });
        });
    });*/

}]);