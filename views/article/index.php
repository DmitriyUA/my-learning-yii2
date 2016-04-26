<?php
/**
 * Created by PhpStorm.
 * User: ASU-3
 * Date: 21.04.16
 * Time: 11:50
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

    <?= Html::tag('h1', 'Архив') ?>
    <ul>
        <?php foreach($article as $curentrecord): ?>

                <?= Html::tag('h3', $curentrecord->title, ['class' => 'title']) ?><br>
                <?= $curentrecord->date ?><br>
                <?= Html::img('@web/'.$curentrecord->image, ['class' => 'image'])?><br>
                <?= $curentrecord->text?><br>

        <?php endforeach; ?>
    </ul>

<?=LinkPager::widget(['pagination' => $pagination]) ?>