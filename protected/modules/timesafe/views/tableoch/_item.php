<div class="row">
    <div class="offset">
        <p class="pull-right">
            <a class="btn" href="<?=$this->createUrl('update', array('id' => $data->id))?>"><i class="icon-pencil"></i> Ред.</a>
            <a class="btn btn-danger delete-link-list" href="#modal-delete" data-toggle="modal" data-title="<?=CHtml::encode($data->name_text)?>" data-id="<?=$data->id?>"><i class="icon-trash"></i> Уд.</a>
        </p>
        <p class="pull-right">
            <?=CHtml::checkbox('TableochCheck[status_int][' . $data->id . ']', $data->status_int, array('class' => 'toggle-on-check'))?>
            <span class="label label-info"><i class="icon-eye-open"></i> Видимость</span>
        </p>
        <span class="label label-info"><?=date('d.m.Y', $data->created_at)?></span>
        <? $img = json_decode($data->image, true); ?>
        <h3 style = "margin-top:5px;">
            <a target = "_blank" href = "/"><?=$data->name_text?></a>
        </h3>
        <?php
            if ($data->category_int == "1") {
                $category = "Премьер лига";
            } else if ($data->category_int == "2") {
                $category = "Первая лига";
            } else if ($data->category_int == "3") {
                $category = "Вторая лига";
            }
        ?>
        <p style = "margin-left:0;">Лига: <?=$category?></p>
        <p style = "margin-left:0;"><div style = "display:inline-block; margin-top:5px;" class = "label">Игр: <?=$data->games_int?></div></p>
        <p style = "margin-left:0;"><div style = "display:inline-block; margin-top:5px;" class = "label">Голов: <?=$data->gols_int?></div></p>
        <p style = "margin-left:0;"><div style = "display:inline-block; margin-top:5px;" class = "label label-success">Очков: <?=$data->ochkov_int?></div></p>
    </div>
</div>