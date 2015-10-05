angular.module('myApp.categories', [])
.controller('CategoriesCtrl', ['$scope','$http', function(scope,$http) {
    $("#loading-div").show();
    $http.get(rdxTestAppGlobalVars.baseUrl+"/api/soap.php?a=category.tree&f=null").then(function (response) {
        scope.categories = response.data.children[0].children;
        scope.activeCategory = scope.categories[0];

        $http.get(rdxTestAppGlobalVars.baseUrl+"/api/soap.php?a=category.assignedProducts&f="+scope.activeCategory.category_id).then(function (response) {
            scope.products = response.data;
            $("#loading-div").hide();
        });
    });
}]);