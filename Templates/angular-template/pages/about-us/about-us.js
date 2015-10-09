'use strict';

angular.module('AboutUs', ['ngRoute'])

.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/about-us', {
    templateUrl: 'pages/about-us/about-us.html',
    controller: 'AboutUsCtrl'
  });
}])

.controller('AboutUsCtrl', [function() {

}]);