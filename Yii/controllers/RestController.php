<?php
/**
 * Created by Naveed-ul-Hassan Malik
 * Date: 8/20/2015
 * Time: 11:22
 */

namespace app\controllers;

use yii\rest\ActiveController;

class RestController extends ActiveController
{
    public $modelClass = 'app\models\Country';

    ////////////////////////////////////////////
    public function actions()
    {
        $actions = parent::actions();
        // remove parent's control over create
        unset($actions['create']);
        return $actions;
    }

    // take your own control over create
    public function actionCreate(){
        pr($_POST);
    }
    ////////////////////////////////////////////

}