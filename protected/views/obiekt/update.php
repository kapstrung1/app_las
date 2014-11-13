<?php
/* @var $this ObiektController */
/* @var $model Obiekt */

$this->breadcrumbs=array(
	'Obiekts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obiekt', 'url'=>array('index')),
	array('label'=>'Create Obiekt', 'url'=>array('create')),
	array('label'=>'View Obiekt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Obiekt', 'url'=>array('admin')),
);
?>

<h1>Update Obiekt <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>