<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */

$this->breadcrumbs=array(
	'Warstwas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Warstwa', 'url'=>array('index')),
	array('label'=>'Create Warstwa', 'url'=>array('create')),
	array('label'=>'View Warstwa', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Warstwa', 'url'=>array('admin')),
);
?>

<h1>Update Warstwa <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>