<?php
$this->breadcrumbs = array(
    Cvlnews::modelTitle()=> array('list'),
    'Добавить'
);
$this->renderPartial(
    '_form', 
    array(
		'model' => $model,
	)
); ?>
