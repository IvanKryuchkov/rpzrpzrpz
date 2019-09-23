
<h1>Блоки</h1>


<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'template-block-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'title',
        array(
            'class' => 'CButtonColumn',
              'template'=>'{update}'
        ),
    ),
));
?>
