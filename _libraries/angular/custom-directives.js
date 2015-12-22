/**
 * Created by  Naveed-ul-Hassan Malik on 8/27/2015.
 */

Date.getUniformDate = function (dateStr) {
    var dateTime = dateStr.split(" ");
    var datePart = dateTime[0];
    var timePart = dateTime[1];
    var dateArr = datePart.split("-");
    var timeArr = timePart.split(":");
    var y = parseInt(dateArr[0]);
    var m = parseInt(dateArr[1]) - 1;
    var d = parseInt(dateArr[2]);
    var h = parseInt(timeArr[0]);
    var min = parseInt(timeArr[1]);
    var s = parseInt(timeArr[2]);
    return new Date(y, m, d, h, min, s);
};

var app = angular.module('CustomDirectives', []);

app.directive('countdown',['$interval', function($interval) {
    return {
        restrict: 'E',
        controller: function ($scope) {},
        link: function (scope, element, attrs) {
            element.ready(function () {
                var dateStr = attrs.date,
                    date = Date.getUniformDate(dateStr),
                    offset = date.getTimezoneOffset() * -60000;
                scope.days = 0;
                scope.hours = 0;
                scope.minutes = 0;
                scope.seconds = 0;
                var diff = Math.floor( ( date.getTime() + parseInt(offset) - new Date().getTime() ) / 1000 );
                if(diff > 0){
                    $interval(function () {
                        var diff = Math.floor( ( date.getTime() + parseInt(offset) - new Date().getTime() ) / 1000);
                        if(diff > 0){
                            scope.days = Math.floor(diff / 86400);
                            diff -= scope.days * 86400;
                            scope.hours = Math.floor(diff / 3600) % 24;
                            diff -= scope.hours * 3600;
                            scope.minutes = Math.floor(diff / 60) % 60;
                            diff -= scope.minutes * 60;
                            scope.seconds = diff % 60;
                            //element.find(".card").flip({axis:'y'});
                        }
                    }, 1000);
                }
            });
        },
        template:
        '<div class="days-bg">' +
        '<div class="half num">{{days}}</div>' +
        '<div class="half txt">Days</div>' +
        '</div>' +
        '<div class="clear"></div>' +
        '<div class="hms-row">' +
        '<div class="hms-col">' +
        '<p class="sm-bg">{{hours}}</p>' +
        '<p class="hms-text">HOURS</p>' +
        '</div><div class="hms-col">' +
        '<p class="bg sm-bg">{{minutes}}</p>' +
        '<p class="hms-text">Minutes</p>' +
        '</div>' +
        '<div class="hms-col" style="margin-right: 0">' +
        '<p class="bg sm-bg card"><span class="front">{{seconds}}</span></p>' +
        '<p class="hms-text">Seconds</p>' +
        '</div>' +
        '<div class="clear"></div>' +
        '</div>' +
        '<div class="clear"></div>'
    };
}]);
