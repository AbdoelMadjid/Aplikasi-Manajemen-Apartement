<?php
/* @var $this JenisPerijinanController */
/* @var $model JenisPerijinan */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'jenis_perijinan_id'); ?>
		<?php echo $form->textField($model,'jenis_perijinan_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nama_jenis_perijinan'); ?>
		<?php echo $form->textField($model,'nama_jenis_perijinan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keterangan_tambahan'); ?>
		<?php echo $form->textField($model,'keterangan_tambahan',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->