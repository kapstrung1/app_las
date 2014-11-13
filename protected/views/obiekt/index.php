<?php
/* @var $this ObiektController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obiekts',
);

$this->menu=array(
	array('label'=>'Create Obiekt', 'url'=>array('create')),
	array('label'=>'Manage Obiekt', 'url'=>array('admin')),
);
?>

<h1>Obiekts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
