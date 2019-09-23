<?php
/* @var $this StaticPageController */
/* @var $model StaticPage */

$this->breadcrumbs = array(
    'Страницы' => array('index'),
);

$this->menu = array(
    array('label' => 'Страницы', 'url' => array('index')),
);
?>

<h1>Страницы</h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'static-page-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'title',
//        'content:html',
        array(
            'class' => 'CButtonColumn',
            'template'=>'{update}'
        ),
    ),
));
?>
