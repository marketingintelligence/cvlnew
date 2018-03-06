<?php
$this->breadcrumbs = array(
    Recipecategory::modelTitle()=> array('list'),
    'Добавить'
);
$this->renderPartial(
    '_form', 
    array(
		'model' => $model,
	)
); ?>
