<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Message */

$this->title = Yii::t('backend', 'MESSAGE_CREATE');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'MESSAGES'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="message-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<pre>
<?php print_r($_GET) ?>
</pre>