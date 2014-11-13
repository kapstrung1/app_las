<?php
/* @var $this PunktController */
/* @var $model Punkt */
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
		<?php echo $form->label($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'obiekt_id'); ?>
		<?php echo $form->textField($model,'obiekt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_aktualizacji'); ?>
		<?php echo $form->textField($model,'data_aktualizacji',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kolejnosc'); ?>
		<?php echo $form->textField($model,'kolejnosc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->