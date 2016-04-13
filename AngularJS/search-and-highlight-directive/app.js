'use strict';

angular.module('myApp', [])
    .controller('MainCtrl', ['$scope', function ($scope) {
        $scope.query = '';
    }])

    .directive('nvdHighlightText', function () {
        return {
            restrict: 'A',
            link: function (scope, elem, attrs) {
                // rewrite jQuery's :contain selector to support case insensitive search
                jQuery.expr[':'].contains = function (a, i, m) {
                    return jQuery(a).text().toUpperCase()
                            .indexOf(m[3].toUpperCase()) >= 0;
                };
                // watch when the attribute changes
                scope.$watch(attrs['nvdHighlightText'], function (query) {
                    // reset html first
                    var highlightedSpans = elem.find('span.highlightedText');
                    highlightedSpans.each(function () {
                        var span = $(this);
                        span.replaceWith(span.text());
                    });
                    // replace occurrences of the search query
                    if (query && query.length) {
                        // find all child elements, and add the element itself to the collection
                        var elements = elem.find(":contains('" + query + "')").add(elem);
                        var regex = new RegExp(query, 'gim'); // global, case-insensitive, multi-line
                        elements.each(function () {
                            // only update if the element does not have any children
                            // otherwise it may result in multiple span generation for a single match
                            if (!$(this).children().length) {
                                var html = $(this).html();
                                html = html.replace(regex, '<span class="highlightedText">$&</span>');
                                $(this).html(html);
                            }
                        });
                    }
                });
            }
        };
    });