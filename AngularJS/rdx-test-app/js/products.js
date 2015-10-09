angular.module('myApp.products', ['ngRoute','ngSanitize'])
.config(['$routeProvider', function($routeProvider) {
    $routeProvider.when('/products', {
        templateUrl: 'partials/products.html',
        controller: 'ProductsCtrl'
    });
}])
.controller('ProductsCtrl', ['$scope','$http', function(scope,$http) {
        scope.curPage = 1;
        scope.pageSize = 10;
        scope.products = [];

        var url = function () {
            return rdxTestAppGlobalVars.apiUrl+"products" +
            "?category="+ scope.activeCategory.entity_id +
            "&curPage=" + scope.curPage +
            "&pageSize=" + scope.pageSize;
        };

        scope.$watch('activeCategory', function(category){
            scope.products = [];
            loadProducts();
        });

        scope.loadMoreProducts = function () {
            loadProducts();
        };

        var loadProducts = function () {
            $("#loading-div").show();
            $http.get(url()).then(function (response) {
                scope.products = scope.products.concat(response.data.data);
                $("#loading-div").hide();
            });
        };

}]);