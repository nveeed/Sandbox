'use strict';

angular.module('myApp.view1', ['ngRoute'])

    .config(['$routeProvider', function ($routeProvider) {
        $routeProvider.when('/view1', {
            templateUrl: 'view1/view1.html',
            controller: 'View1Ctrl'
        });
    }])

    .controller('View1Ctrl', ['$scope', function ($scope) {
        $scope.query = 'nav';
    }])

    .directive('nvdHighlightText', function () {
        return {
            restrict: 'A',
            link: function (scope, elem, attrs) {
                scope.$watch(attrs['nvdHighlightText'], function (query) {
                    if( query && query.length )
                    {
                        var highlightedSpans = elem.find('span.highlightedText');
                        highlightedSpans.replaceWith(highlightedSpans.text());
                        var html = elem.html();
                        var regex = new RegExp(query, 'gim');
                        html = html.replace(regex, '<span class="highlightedText">$&</span>');
                        elem.html(html);
                    }
                });
            }
        };
    });