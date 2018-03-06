<!--start-modal window-->
<!--block-full-bookpage-->
<div class="main-body style-2" id="full-bookpage-1">
    <div class="close"> </div>
    <h3 class="modal-title"><?=$model->name_text?></h3>
    <div class="main-body-h">
        <div class="main-body-h-img">
            <?$img = json_decode($model->image, true); ?>
            <img src="/upload/Recipe/tm/<?=$img[0];?>">
        </div>
        <div class="main-body-h-text">
            <div class="block-like">
                <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;<?=$model->views_int?></div>
                <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                <?=$model->comments_int?></div>
                <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;
                <?=$model->likes?></div>
            </div>
            <p>
                 <?=$model->short_bigtext?>
            </p>
            <p>
               ????
            </p>
        </div>
    </div>
    <div class="main-body-b">
        <h3>Необходимые ингредиенты</h3>
            <? $pieces = preg_split("/[\s,]+/", $model->ingredients );
            foreach ($pieces as $key => $value) {  ?>
                    <ul>      
                        <li><span><?=$value?></span></li>
                    </ul>
               <? } ?> 
    </div>
    <hr />
    <div class="main-body-b">
        <h3>Как приготовить</h3>
        <p><?=$model->full_bigtexteditor?></p>  
    </div>
    <h3 class="center">Приятного аппетита!</h3>
</div>
<!--block-full-bookpage-end-->
<!--end-modal-window-->

<script>
$('body').on('click', '.close', function() {
    window.open("http://kairat.zu/recipe","_self");
});        
</script>>