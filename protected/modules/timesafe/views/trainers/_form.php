<?php
    $form = $this->beginWidget('BootActiveForm', array(
        'id' => 'Trainers-form',
        'type'=>'horizontal',
        'enableAjaxValidation' => true,
            'focus' => array($model, 'name_text'),

        'htmlOptions' => array(
            'class' => 'form form-horizontal',
            'enctype'=>'multipart/form-data'
        ),
    ));
    echo CHtml::hiddenField('Trainers_page',$_GET['Trainers_page']);
?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>        
    	<?=CHtml::link('назад', array('list','Trainers_page'=>$_GET['Trainers_page'])); ?>    </div>
        <?php echo $form->textFieldRow($model, 'url_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php //echo $form->autoFieldRow($model, 'category_int', array('class' => 'span6'), array('relation'=>'parentCategory','title'=>'title'));; ?>
        <div class="control-group ">
            <label class="control-label">Категория</label>
            <div class="controls">
                <select name="Trainers[category_int]" id="Trainers_category_int">
                    <option value = "1" <? if ($model->category_int == "1") { ?>selected<? } ?>>Кайрат</option>
                    <option value = "2" <? if ($model->category_int == "2") { ?>selected<? } ?>>Кайрат А</option>
                    <option value = "3" <? if ($model->category_int == "3") { ?>selected<? } ?>>Кайрат М</option>
                </select>
            </div>
        </div>
        <?php echo $form->textFieldRow($model, 'name_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'kazname_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'engname_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>

        <?php echo $form->textFieldRow($model, 'position_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'kazposition_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'engposition_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>

        <?php echo $form->textFieldRow($model, 'dr_int', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'gr_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'kazgr_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->textFieldRow($model, 'enggr_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>

        <?php echo $form->textAreaRow($model, 'bio_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'bio_bigtexteditor')); ?>
        <?php echo $form->textAreaRow($model, 'kazbio_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'kazbio_bigtexteditor')); ?>
        <?php echo $form->textAreaRow($model, 'engbio_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'engbio_bigtexteditor')); ?>

        <?php echo $form->textAreaRow($model, 'kar_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'kar_bigtexteditor')); ?>
        <?php echo $form->textAreaRow($model, 'kazkar_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'kazkar_bigtexteditor')); ?>
        <?php echo $form->textAreaRow($model, 'engkar_bigtexteditor',array('class'=>'span12'));; ?>
        <?php //$this->widget('application.extensions.elrte.elRTE', array('model'=>$model,'attribute'=>'engkar_bigtexteditor')); ?>

        <?php echo $form->singlefileFieldRow($model, 'image',array('class'=>'input-file'));; ?>
        <?php echo $form->dateFieldRow($model, 'created_at',array('class'=>'span2'));; ?>
        <?php echo $form->textFieldRow($model, 'weight_text', array('size' => 60, 'maxlength' => 255, 'class'=>'span12')); ?>
        <?php echo $form->checkBoxRow($model, 'status_int');; ?>
    <div class="form-actions">
        <button class="btn btn-success" type="submit">
            <?=$model->isNewRecord ? 'Добавить' : 'Сохранить'; ?>
        </button>
        <span class="text_button_padding">или</span>
        <?=CHtml::link('назад', array('list','Trainers_page'=>$_GET['Trainers_page'])); ?>
	</div>

<script>
    $('#Trainers_name_text').change(function() {
        $('#Trainers_url_text').val(cyr2lat($('#Trainers_name_text').val()));
    });
    function cyr2lat(str) {

        var cyr2latChars = new Array(
            ['а', 'a'], ['б', 'b'], ['в', 'v'], ['г', 'g'],
            ['д', 'd'],  ['е', 'e'], ['ё', 'yo'], ['ж', 'zh'], ['з', 'z'],
            ['и', 'i'], ['й', 'y'], ['к', 'k'], ['л', 'l'],
            ['м', 'm'],  ['н', 'n'], ['о', 'o'], ['п', 'p'],  ['р', 'r'],
            ['с', 's'], ['т', 't'], ['у', 'u'], ['ф', 'f'],
            ['х', 'h'],  ['ц', 'c'], ['ч', 'ch'],['ш', 'sh'], ['щ', 'shch'],
            ['ъ', ''],  ['ы', 'y'], ['ь', ''],  ['э', 'e'], ['ю', 'yu'], ['я', 'ya'],

            ['А', 'a'], ['Б', 'b'],  ['В', 'v'], ['Г', 'g'],
            ['Д', 'd'], ['Е', 'e'], ['Ё', 'yo'],  ['Ж', 'zh'], ['З', 'z'],
            ['И', 'i'], ['Й', 'y'],  ['К', 'k'], ['Л', 'l'],
            ['М', 'm'], ['Н', 'n'], ['О', 'o'],  ['П', 'p'],  ['Р', 'r'],
            ['С', 's'], ['Т', 't'],  ['У', 'u'], ['Ф', 'f'],
            ['Х', 'h'], ['Ц', 'c'], ['Ч', 'ch'], ['Ш', 'sh'], ['Щ', 'shch'],
            ['Ъ', ''],  ['Ы', 'y'],
            ['Ь', ''],
            ['Э', 'e'],
            ['Ю', 'yu'],
            ['Я', 'ya'],

            ['a', 'a'], ['b', 'b'], ['c', 'c'], ['d', 'd'], ['e', 'e'],
            ['f', 'f'], ['g', 'g'], ['h', 'h'], ['i', 'i'], ['j', 'j'],
            ['k', 'k'], ['l', 'l'], ['m', 'm'], ['n', 'n'], ['o', 'o'],
            ['p', 'p'], ['q', 'q'], ['r', 'r'], ['s', 's'], ['t', 't'],
            ['u', 'u'], ['v', 'v'], ['w', 'w'], ['x', 'x'], ['y', 'y'],
            ['z', 'z'],

            ['A', 'A'], ['B', 'B'], ['C', 'C'], ['D', 'D'],['E', 'E'],
            ['F', 'F'],['G', 'G'],['H', 'H'],['I', 'I'],['J', 'J'],['K', 'K'],
            ['L', 'L'], ['M', 'M'], ['N', 'N'], ['O', 'O'],['P', 'P'],
            ['Q', 'Q'],['R', 'R'],['S', 'S'],['T', 'T'],['U', 'U'],['V', 'V'],
            ['W', 'W'], ['X', 'X'], ['Y', 'Y'], ['Z', 'Z'],

            [' ', '-'],['0', '0'],['1', '1'],['2', '2'],['3', '3'],
            ['4', '4'],['5', '5'],['6', '6'],['7', '7'],['8', '8'],['9', '9'],
            ['-', '-']
        );

        var Categorytr = new String();

        for (var i = 0; i < str.length; i++) {

            ch = str.charAt(i);
            var newCh = '';

            for (var j = 0; j < cyr2latChars.length; j++) {
                if (ch == cyr2latChars[j][0]) {
                    newCh = cyr2latChars[j][1];

                }
            }
            // Если найдено совпадение, то добавляется соответствие, если нет - пустая строка
            Categorytr += newCh;

        }
        // Удаляем повторяющие знаки - Именно на них заменяются пробелы.
        // Так же удаляем символы перевода строки, но это наверное уже лишнее
        return Categorytr.replace(/[-]{2,}/gim, '-').replace(/\n/gim, '');
    }
</script>
<? $this->endWidget(); ?>

