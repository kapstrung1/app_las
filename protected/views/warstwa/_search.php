<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nazwa'); ?>
		<?php echo $form->textField($model,'nazwa',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'typ_obiektow'); ?>
		<?php echo $form->textField($model,'typ_obiektow',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ilosc_obiektow'); ?>
		<?php echo $form->textField($model,'ilosc_obiektow'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'czy_wyswietlic'); ?>
		<?php echo $form->textField($model,'czy_wyswietlic'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_aktualizacji'); ?>
		<?php echo $form->textField($model,'data_aktualizacji',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'z_index'); ?>
		<?php echo $form->textField($model,'z_index'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->