<?php
/* @var $this WarstwaController */
/* @var $model Warstwa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'warstwa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nazwa'); ?>
		<?php echo $form->textField($model,'nazwa',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nazwa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'typ_obiektow'); ?>
		<?php echo $form->textField($model,'typ_obiektow',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'typ_obiektow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ilosc_obiektow'); ?>
		<?php echo $form->textField($model,'ilosc_obiektow'); ?>
		<?php echo $form->error($model,'ilosc_obiektow'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'czy_wyswietlic'); ?>
		<?php echo $form->textField($model,'czy_wyswietlic'); ?>
		<?php echo $form->error($model,'czy_wyswietlic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_aktualizacji'); ?>
		<?php echo $form->textField($model,'data_aktualizacji',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'data_aktualizacji'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'z_index'); ?>
		<?php echo $form->textField($model,'z_index'); ?>
		<?php echo $form->error($model,'z_index'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->