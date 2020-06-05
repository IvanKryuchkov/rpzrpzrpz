<?php
/* @var $this StaticPageController_ru */
/* @var $model StaticPage_ru */

$this->breadcrumbs = array(
    'Страницы на русском' => array('index'),
);

$this->menu = array(
    array('label' => 'Страницы на русском', 'url' => array('index')),
);
?>

<h1>Страницы на русском</h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'static-page-grid-ru',
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
