<?php
/* @var $this StaticPage_ruController */
/* @var $model StaticPage_ru */

$this->breadcrumbs = array(
    'Страницы на русском' => array('index'),
    $model->title => array('update', 'id' => $model->id),
    'Редактирование',
);
?>

<h1>Редактированние страницы "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>