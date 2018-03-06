<?php
$this->breadcrumbs = array(
    Mainmenu::modelTitle()=> array('list'),
    'Добавить'
);
$this->renderPartial(
    '_form', 
    array(
		'model' => $model,
	)
); ?>
