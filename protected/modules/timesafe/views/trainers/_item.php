<div class="row">
    <div class="offset">
        <p class="pull-right">
            <a class="btn" href="<?=$this->createUrl('update', array('id' => $data->id))?>"><i class="icon-pencil"></i> Ред.</a>
            <a class="btn btn-danger delete-link-list" href="#modal-delete" data-toggle="modal" data-title="<?=CHtml::encode($data->name_text)?>" data-id="<?=$data->id?>"><i class="icon-trash"></i> Уд.</a>
        </p>
        <p class="pull-right">
            <?=CHtml::checkbox('TrainersCheck[status_int][' . $data->id . ']', $data->status_int, array('class' => 'toggle-on-check'))?>
            <span class="label label-info"><i class="icon-eye-open"></i> Видимость</span>
        </p>
        <span class="label label-info"><?=date('d.m.Y', $data->created_at)?></span>
        <? $img = json_decode($data->image, true); ?>
        <h3 style = "margin-top:5px;">
            <a target = "_blank" href = "/team/"><?=$data->name_text?></a>
        </h3>
        <? if ($data->category_int == "1") { ?>
            <? $category = "Кайрат"; ?>
        <? } else if ($data->category_int == "2") { ?>
            <? $category = "Кайрат А"; ?>
        <? } else if ($data->category_int == "3") { ?>
            <? $category = "Кайрат М"; ?>
        <? } ?>
        <p style = "margin-left:0; font-weight:bold;">Категория: <a style = "color:#3a87ad" target = "_blank" href = "/team/"><?=$category?></a></p>
        <p style = "margin-left:0; font-weight:bold;">Порядковый номер: <?=$data->weight_text?></p>
    </div>
</div>