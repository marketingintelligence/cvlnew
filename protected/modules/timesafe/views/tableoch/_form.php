<?php $form = $this->beginWidget('BootActiveForm', array(
    'id' => 'Tableoch-form',
    'type'=>'horizontal',
    'enableAjaxValidation' => true,    
    	'focus' => array($model, 'name_text'),
    
    'htmlOptions' => array(
        'class' => 'form form-horizontal',
        'enctype'=>'multipart/form-data'
    ),
));
echo CHtml::hiddenField('Tableoch_page',$_GET['Tableoch_page']);
?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>        
    	<?=CHtml::link('назад', array('list','Tableoch_page'=>$_GET['Tableoch_page'])); ?>    </div>
        <div class="control-group ">
            <label class="control-label">Лига</label>
            <div class="controls">
                <select name="Tableoch[category_int]" id="Tableoch_category_int">
                    <option value = "1" <? if ($model->category_int == "1") { ?>selected<? } ?>>Премьер лига</option>
                    <option value = "2" <? if ($model->category_int == "2") { ?>selected<? } ?>>Первая лига</option>
                    <option value = "3" <? if ($model->category_int == "3") { ?>selected<? } ?>>Вторая лига</option>
                </select>
            </div>
        </div>
    	<?php echo $form->textFieldRow($model, 'name_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'kazname_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'engname_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'games_int', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'gols_int', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'ochkov_int', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->dateFieldRow($model, 'created_at',array('class'=>'span2'));; ?>
        <?php echo $form->checkBoxRow($model, 'status_int');; ?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>
        <?=CHtml::link('назад', array('list','Tableoch_page'=>$_GET['Tableoch_page'])); ?>
	</div>
<? $this->endWidget(); ?>

