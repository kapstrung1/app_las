<?php
/* @var $this PunktController */
/* @var $model Punkt */

$this->breadcrumbs=array(
	'Punkts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Punkt', 'url'=>array('index')),
	array('label'=>'Create Punkt', 'url'=>array('create')),
	array('label'=>'Update Punkt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Punkt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Punkt', 'url'=>array('admin')),
);
?>

<h1>View Punkt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'latitude',
		'longitude',
		'obiekt_id',
		'data_aktualizacji',
		'kolejnosc',
	),
)); ?>
