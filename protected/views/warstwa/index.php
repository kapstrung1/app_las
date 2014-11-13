<?php
/* @var $this WarstwaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Warstwas',
);

$this->menu=array(
	array('label'=>'Create Warstwa', 'url'=>array('create')),
	array('label'=>'Manage Warstwa', 'url'=>array('admin')),
);
?>

<h1>Warstwas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
