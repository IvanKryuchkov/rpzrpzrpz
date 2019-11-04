<?php use yii\helpers\Html; ?>
<div class="pull-right btn-group">
    <?php echo Html::a(Yii::t('yii','Update'), array('site/update', 'id' => $post->id), array('class' => 'btn btn-primary')); ?>
    <?php echo Html::a(Yii::t('yii','Delete'), array('site/delete', 'id' => $post->id), array('class' => 'btn btn-danger')); ?>
</div>
 
<h1><?= Yii::t('yii','Title') ?>: <?php echo $post->title; ?></h1>
<p><?= Yii::t('yii','Content') ?>: <?php echo $post->content; ?></p>
<hr/>
<time><?= Yii::t('yii','Created') ?>: <?php echo $post->created; ?></time><br />
<time><?= Yii::t('yii','Updated') ?>: <?php echo $post->updated; ?></time>
