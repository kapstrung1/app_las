<?php
/* @var $this PunktController */
/* @var $model Punkt */

$this->breadcrumbs=array(
	'Punkts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Punkt', 'url'=>array('index')),
	array('label'=>'Create Punkt', 'url'=>array('create')),
	array('label'=>'View Punkt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Punkt', 'url'=>array('admin')),
);
?>

<h1>Update Punkt <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>