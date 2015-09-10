<?php
/* @var $this yii\web\View */
$this->title = 'Yii-Sandbox';

?>
<script>

    'use strict';

    // Declare app level module which depends on views, and components
    var app = angular.module('myApp', [
        'ngRoute'
    ]);

    app.controller('MyCtrl', [function() {


    }]);


</script>

<div np-app="myApp">
    <div ng-controller="MyCtrl">

    </div>
</div>