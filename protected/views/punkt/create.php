<?php
/* @var $this PunktController */
/* @var $model Punkt */

$this->breadcrumbs=array(
	'Punkts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Punkt', 'url'=>array('index')),
	array('label'=>'Manage Punkt', 'url'=>array('admin')),
);
?>

<h1>Create Punkt</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>