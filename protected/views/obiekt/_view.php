<?php
/* @var $this ObiektController */
/* @var $data Obiekt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warstwa_id')); ?>:</b>
	<?php echo CHtml::encode($data->warstwa_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwa')); ?>:</b>
	<?php echo CHtml::encode($data->nazwa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ilosc_punktow')); ?>:</b>
	<?php echo CHtml::encode($data->ilosc_punktow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aktualizacji')); ?>:</b>
	<?php echo CHtml::encode($data->data_aktualizacji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('czy_wyswietlic')); ?>:</b>
	<?php echo CHtml::encode($data->czy_wyswietlic); ?>
	<br />


</div>