<?php $form = $this->beginWidget('CActiveForm', array(
    'id'=>'user-form',
    'enableAjaxValidation'=>true,
    'focus' => array($model, 'name_text'),
    'htmlOptions' => array(
        'class' => 'form form-horizontal',
        'enctype'=>'multipart/form-data'
    ),
));
echo CHtml::hiddenField('Recipe_page',$_GET['Recipe_page']);
?>
<div class="row">
     <?php echo CHtml::activeLabel($model,'name_text'); ?>
     <?php echo CHtml::activeTextField($model,'name_text') ?>
</div>

<div>
    <?php echo $form->labelEx($model,'short_bigtext'); ?>
    <?php echo $form->textField($model,'full_bigtexteditor',array('size'=>20,'maxlength'=>20)); ?>
    <?php echo $form->listbox($model,'category_int',array('size'=>20,'maxlength'=>20),array('relation'=>'parentCategory','title'=>'title')); ?>
    <?php echo $form->dropDownList($model,'category_int',array('relation'=>'parentCategory','title'=>'title')); ?>
    <?php echo $form->error($model,'comments'); ?>
    <?php echo $form->error($model,'comments'); ?>
    <?//php echo $form->autoFieldRow($model, 'category_int', array('class' => 'span6'),array('relation'=>'parentCategory','title'=>'title'));; ?>


</div>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
    </div>

<?php $this->endWidget(); ?>
