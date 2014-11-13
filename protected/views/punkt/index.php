<?php
/* @var $this PunktController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Punkts',
);

$this->menu=array(
	array('label'=>'Create Punkt', 'url'=>array('create')),
	array('label'=>'Manage Punkt', 'url'=>array('admin')),
);
?>

<h1>Punkts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
