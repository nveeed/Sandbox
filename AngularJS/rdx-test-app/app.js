'use strict';

// Declare app level module which depends on views, and components
angular.module('myApp', [
    'ngRoute',
    'myApp.products',
    'myApp.categories'
]).
config(['$routeProvider', '$locationProvider', function($routeProvider,$locationProvider) {
    $routeProvider.
        when('/', {
            templateUrl: 'partials/products.html',
            controller: 'ProductsCtrl'
        }).
        otherwise({redirectTo: '/'});
    $locationProvider.html5Mode(true);
}]);

// @codekit-append "js/categories.js"
// @codekit-append "js/products.js"
// @codekit-append "js/config.js"