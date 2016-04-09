<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\controllers\SiteController;
use app\controllers\CountryController;
use yii\helpers\Url;

$this->title = 'Tests';
$this->params['breadcrumbs'][] = $this->title; 
?>
<div class="site-tests">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Tests page. Here's a list of all exercises done on this project:
    </p>

    <ul>
    	<li>This is a <a href="<?php echo Url::to(['site/say']); ?>"><?= "say" ?></a> test.</li>
        <li>This is a <a href="<?php echo SiteController::actionEntry(); ?>"><?= "entryform" ?></a> test.</li>
        <li>This is a <a href="<?php CountryController::actionIndex(); ?>"><?= "countries" ?></a> test.</li>
    </ul>

    <p>
    	You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
