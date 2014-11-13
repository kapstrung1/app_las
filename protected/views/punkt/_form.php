<?php
/* @var $this PunktController */
/* @var $model Punkt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'punkt-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
		<?php echo $form->textField($model,'latitude'); ?>
		<?php echo $form->error($model,'latitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
		<?php echo $form->textField($model,'longitude'); ?>
		<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'obiekt_id'); ?>
		<?php echo $form->textField($model,'obiekt_id'); ?>
		<?php echo $form->error($model,'obiekt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_aktualizacji'); ?>
		<?php echo $form->textField($model,'data_aktualizacji',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'data_aktualizacji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kolejnosc'); ?>
		<?php echo $form->textField($model,'kolejnosc'); ?>
		<?php echo $form->error($model,'kolejnosc'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->