<?php $form = $this->beginWidget('BootActiveForm', array(
    'id' => 'Bottomsoc-form',
    'type'=>'horizontal',
    'enableAjaxValidation' => true,    
    	'focus' => array($model, 'name_text'),
    
    'htmlOptions' => array(
        'class' => 'form form-horizontal',
        'enctype'=>'multipart/form-data'
    ),
));
echo CHtml::hiddenField('Bottomsoc_page',$_GET['Bottomsoc_page']);
?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>        
    	<?=CHtml::link('назад', array('list','Bottomsoc_page'=>$_GET['Bottomsoc_page'])); ?>    </div>
    	<?php echo $form->textFieldRow($model, 'name_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'url_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'icon_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'weight_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->dateFieldRow($model, 'created_at',array('class'=>'span2'));; ?>
        <?php echo $form->checkBoxRow($model, 'status_int');; ?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>
        <?=CHtml::link('назад', array('list','Bottomsoc_page'=>$_GET['Bottomsoc_page'])); ?>
	</div>
<? $this->endWidget(); ?>

