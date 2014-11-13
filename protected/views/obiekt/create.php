<?php
/* @var $this ObiektController */
/* @var $model Obiekt */

$this->breadcrumbs=array(
	'Obiekts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obiekt', 'url'=>array('index')),
	array('label'=>'Manage Obiekt', 'url'=>array('admin')),
);
?>

<h1>Create Obiekt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>