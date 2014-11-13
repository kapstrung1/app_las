<?php
/* @var $this ObiektController */
/* @var $model Obiekt */

$this->breadcrumbs=array(
	'Obiekts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Obiekt', 'url'=>array('index')),
	array('label'=>'Create Obiekt', 'url'=>array('create')),
	array('label'=>'Update Obiekt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Obiekt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obiekt', 'url'=>array('admin')),
);
?>

<h1>View Obiekt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'warstwa_id',
		'nazwa',
		'ilosc_punktow',
		'data_aktualizacji',
		'czy_wyswietlic',
	),
)); ?>
