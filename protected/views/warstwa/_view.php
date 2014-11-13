<?php
/* @var $this WarstwaController */
/* @var $data Warstwa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwa')); ?>:</b>
	<?php echo CHtml::encode($data->nazwa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('typ_obiektow')); ?>:</b>
	<?php echo CHtml::encode($data->typ_obiektow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ilosc_obiektow')); ?>:</b>
	<?php echo CHtml::encode($data->ilosc_obiektow); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('czy_wyswietlic')); ?>:</b>
	<?php echo CHtml::encode($data->czy_wyswietlic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aktualizacji')); ?>:</b>
	<?php echo CHtml::encode($data->data_aktualizacji); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('z_index')); ?>:</b>
	<?php echo CHtml::encode($data->z_index); ?>
	<br />

	*/ ?>

</div>