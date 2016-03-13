<?php
/**
 * Created by PhpStorm.
 * User: Hamed
 * Date: 3/13/2016
 * Time: 6:10 PM
 */

use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>