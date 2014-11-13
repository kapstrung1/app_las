<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */

$this->breadcrumbs=array(
	'Warstwas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Warstwa', 'url'=>array('index')),
	array('label'=>'Manage Warstwa', 'url'=>array('admin')),
);
?>

<h1>Create Warstwa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>