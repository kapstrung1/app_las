<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */

$this->breadcrumbs=array(
	'Warstwas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Warstwa', 'url'=>array('index')),
	array('label'=>'Create Warstwa', 'url'=>array('create')),
	array('label'=>'Update Warstwa', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Warstwa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Warstwa', 'url'=>array('admin')),
);
?>

<h1>View Warstwa #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nazwa',
		'typ_obiektow',
		'ilosc_obiektow',
		'czy_wyswietlic',
		'data_aktualizacji',
		'user_id',
		'z_index',
	),
)); ?>
