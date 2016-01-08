/**
 * Created by  Naveed-ul-Hassan Malik on 8/27/2015.
 */

var app = angular.module('CustomDirectives', []);

app.directive('autoHide', function() {
    return {
        restrict: 'A',
        link: function(scope, elm, attrs){
            // hide the button immediately to avoid multiple submissions
            elm.click(function () {
                elm.hide();
                // if the form is invalid, show it again
                var parentForm = scope[attrs.parentForm];

                if(!parentForm) throw new Error("autoHide requires parent-form attribute to be set and match the name attribute of the parent form tag.");

                if( parentForm.$invalid )
                {
                    elm.show();
                }
            });
        }
    };
});

app.directive('countdown',['$interval', function($interval) {
    return {
        restrict: 'E',
        controller: function ($scope) {},
        link: function (scope, element, attrs) {
            element.ready(function () {
                var dateStr = attrs.date,
                    date = new Date(dateStr);
                scope.days = 0;
                scope.hours = 0;
                scope.minutes = 0;
                scope.seconds = 0;
                var diff = Math.floor((date.getTime() - (new Date()).getTime()) / 1000);
                if(diff > 0){
                    $interval(function () {
                        var diff = Math.floor((date.getTime() - (new Date()).getTime()) / 1000);
                        scope.days = Math.floor(diff / 86400);
                        diff -= scope.days * 86400;
                        scope.hours = Math.floor(diff / 3600) % 24;
                        diff -= scope.hours * 3600;
                        scope.minutes = Math.floor(diff / 60) % 60;
                        diff -= scope.minutes * 60;
                        scope.seconds = diff % 60;
                    }, 1000);
                }
            });
        },
        template:
        '<p>' +
            '<span>{{days}}<small>D</small></span>' +
            '<span>{{hours}}<small>H</small></span>' +
            '<span>{{minutes}}<small>M</small></span>' +
            '<span>{{seconds}}<small>S</small></span>' +
        '</p>'
    };
}]);
