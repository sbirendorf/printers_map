<?php
/* @var $this PrintersController */
/* @var $model Printers */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'printers-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'location'); ?>
		<?php echo $form->textArea($model,'location',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printer_type'); ?>
		<?php echo $form->textField($model,'printer_type',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'printer_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lat'); ?>
		<?php echo $form->textField($model,'lat'); ?>
		<?php echo $form->error($model,'lat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lng'); ?>
		<?php echo $form->textField($model,'lng'); ?>
		<?php echo $form->error($model,'lng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printer_status'); ?>
		<?php echo $form->textField($model,'printer_status',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'printer_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'printer_active'); ?>
		<?php echo $form->textField($model,'printer_active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'printer_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comment'); ?>
		<?php echo $form->textArea($model,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'comment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip'); ?>
		<?php echo $form->textField($model,'ip',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->