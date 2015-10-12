'use strict';
// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'ngAnimate',
  'Home',
	'AboutUs'// append more modules here
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/home'});
}]);

// @codekit-append "pages/home/home.js"
// @codekit-append "pages/about-us/about-us.js"
// append more files here
