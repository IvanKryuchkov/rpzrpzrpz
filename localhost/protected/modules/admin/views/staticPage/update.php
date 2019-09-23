<?php
/* @var $this StaticPageController */
/* @var $model StaticPage */

$this->breadcrumbs = array(
    'Страницы' => array('index'),
    $model->title => array('update', 'id' => $model->id),
    'Редактирование',
);
?>

<h1>Редактированние страницы "<?php echo $model->title; ?>"</h1>

<?php $this->renderPartial('_form', array('model' => $model)); ?>