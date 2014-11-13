<?php
/* @var $this ObiektController */
/* @var $model Obiekt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'obiekt-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'warstwa_id'); ?>
		<?php echo $form->textField($model,'warstwa_id'); ?>
		<?php echo $form->error($model,'warstwa_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nazwa'); ?>
		<?php echo $form->textField($model,'nazwa',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nazwa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ilosc_punktow'); ?>
		<?php echo $form->textField($model,'ilosc_punktow'); ?>
		<?php echo $form->error($model,'ilosc_punktow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_aktualizacji'); ?>
		<?php echo $form->textField($model,'data_aktualizacji',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'data_aktualizacji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'czy_wyswietlic'); ?>
		<?php echo $form->textField($model,'czy_wyswietlic'); ?>
		<?php echo $form->error($model,'czy_wyswietlic'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->