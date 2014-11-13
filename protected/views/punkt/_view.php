<?php
/* @var $this PunktController */
/* @var $data Punkt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('obiekt_id')); ?>:</b>
	<?php echo CHtml::encode($data->obiekt_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aktualizacji')); ?>:</b>
	<?php echo CHtml::encode($data->data_aktualizacji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kolejnosc')); ?>:</b>
	<?php echo CHtml::encode($data->kolejnosc); ?>
	<br />


</div>