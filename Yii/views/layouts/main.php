<?php
use yii\helpers\Html;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700|Oswald:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/x-icon" href="<?=Yii::$app->params['assetsDir']?>images/favicon.ico" />

    <?php
    // The following script initializes the global variables used throughout javascript
    ?>
    <script>
        var assetsDir = '<?=Yii::$app->params['assetsDir']?>';
    </script>

    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>



    <?=$content?>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
