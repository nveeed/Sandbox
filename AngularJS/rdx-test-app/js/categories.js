angular.module('myApp.categories', [])
.controller('CategoriesCtrl', ['$rootScope','$http', function(scope,$http) {
    $("#loading-div").show();
    $http.get(rdxTestAppGlobalVars.apiUrl+"categories").then(function (response) {
        scope.categories = response.data.data;
        scope.activeCategory = scope.categories[0];
        $("#loading-div").hide();
    });

    scope.setActiveCat = function (category) {
        scope.activeCategory = category;
    }
}]);