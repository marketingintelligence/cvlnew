    <div class="main-menu">
        <div class="main-menu-item">
            <a href="/recipe/myaso/">
            <div class="main-circle" id="menu-item-1">
                <span>Мясо</span>
                <img src="/mymeat/img/myaso2.png">
            </div>
            </a>
        </div>
        
        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <a href="/recipe/ryba/">
            <div class="main-circle" id="menu-item-2">
                <span>Рыба</span>
                <img src="/mymeat/img/ryba2.png">
            </div>
            </a>
        </div>
        
        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <a href="/recipe/pod-vino/">
            <div class="main-circle" id="menu-item-3">
                <span>Под вино</span>
                <img src="/mymeat/img/resipe/vino.png">
            </div>
            </a>
        </div>

        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <a href="/recipe/pod-pivo/"> 
            <div class="main-circle" id="menu-item-4">
                <span>Под пиво</span>
                <img src="/mymeat/img/resipe/pivo.png">
            </div>
            </a>
        </div>
        
        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <a href="/recipe/pod-vodku/"> 
            <div class="main-circle" id="menu-item-5">
                <span>Под водку</span>
                <img src="/mymeat/img/resipe/vodka.png">
            </div>
            </a>
        </div>
        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
               <a href="/recipe/recepty-nashih-podpischikov/"> 
            <div class="main-circle" id="menu-item-6">
                <span>Рецепты наших подписчиков</span>
            </div>
            </a>
        </div>

            <div class="filter">
            <form action="" method="post" name="filter">
                <select class="first-select">
                    <option hidden>Поиск по фильтрам</option>
                    <option>Option-1</option>
                    <option>Option-2</option>
                    <option>Option-3</option>
                    <option>Option-4</option>

                </select>
                <select class="second-select">
                    <option hidden>Поиск по фильтрам</option>
                    <option>Option-1</option>
                    <option>Option-2</option>
                    <option>Option-3</option>
                    <option>Option-4</option>
                </select>
            </form>
        </div>
    </div>
</section>

<section id="section-r">
    <img src="/mymeat/img/meat-rightbg.png" class="meat-rightbg2">
    <img src="/mymeat/img/meat-leftbg.png" class="meat-leftbg2">

    <div class="recipes-block factive">
        <div class="box">
            <h1 class="title">Последние рецепты</h1>
        </div>

<div class="section-items">

        <?  $i=0;
        ?>
         <?foreach ( $model as $key => $value ) {    
            if( ($i == 0 || $i == 2 || $i == 4 || $i == 5 || $i == 8 || $i == 10 || $i == 12) && 
                ( $key == 0 || $key >= 5 || $key = 2 ) ) { ?>
               
                <?  $criteria = new CDbCriteria();
                    $criteria->condition = "status_int = '1'";
                    $top = Recipe::model()->find($criteria);
                    $img = json_decode($top->image, true);      ?>

            <!--block-start-->
            <div class="block">
               <a href="/recipe/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/"> 
                <div class="click-block"  data-id="<?=$i?>">
                    <div class="block-img">
                        <?$img = json_decode($value->image, true);?>
                        <img src="/upload/Recipe/tm/<?=$img[0];?>">
                    </div>
                    <div class="block-text">
                        <h3><?=$value->name_text?></h3>
                        <span>
                        <?
                            $text = $value->short_bigtext;
                            $max_lengh = 150;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                    </span>
                    </div>
                </div>  
                </a> 
                <div class="block-like">
                    <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;<?=$value->views_int?></div>
                    <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                        <?=$value->comments_int?></div>
                    <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;<?=$value->likes?></div>
                 </div>
            </div>
            <!--block-end-->
         <?   } ?>        
          
           
            <? if( ($i == 6 || $i == 7 || $i == 13) && ( $key>=5 ) ) {?>
            <!--block-borderimg-start-->
            <div class="block-borderimg">
                <!--page-1-->
                <div class="borderimg-page active" id="b-page-1-1">
                    <a href="/recipe/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/"> 
                    <div class="click-block" data-id="<?=$i?>">
                        <div class="block-img">
                        <?$img = json_decode($value->image, true);?>
                        <img src="/upload/Recipe/full/<?=$img[0];?>">
                        </div>
                        <div class="block-text">
                            <h3><?=$value->name_text?></h3>
                            <span>
                                <?
                                $text = $value->short_bigtext;
                                $max_lengh = 150;
                                if(mb_strlen($text, "UTF-8") > $max_lengh) {
                                $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                                $text_explode = explode(" ", $text_cut);
                                unset($text_explode[count($text_explode) - 1]);
                                $text_implode = implode(" ", $text_explode); ?>
                                <?=$text_implode."...";?>
                                <?} else { ?> <?=$text;?>
                                <?  }   ?>
                            </span>
                        </div>
                    </div>
                    </a>
                    <div class="block-like">
                        <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;<?=$value->views_int?></div>
                        <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                            <?=$value->comments_int?></div>
                        <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;<?=$value->likes?></div>
                    </div>
                </div>
            </div>
            <!--block-borderimg-end-->
            <? } ?>

            <? if( ($i == 9) &&  ( $key>=5 ) ) { ?>
            <!--block-sale-start-->
            <div class="block-sale" >
                <a href="/recipe/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/"> 
                <div class="click-block" data-id="<?=$i?>">
                    <div class="block-img">
                        <?$img = json_decode($value->image, true);?>
                        <img src="/upload/Recipe/full/<?=$img[0];?>">
                    </div>
                    <div class="block-text">
                        <h3><?=$value->name_text?></h3>
                        <span>
                            <?
                            $text = $value->short_bigtext;
                            $max_lengh = 150;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                        </span>
                    </div>
                </div>
                </a>
                <div class="block-like"><div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;
                    <?=$value->views_int?></div>
                    <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                        <?=$value->comments_int?></div>
                    <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;<?=$value->likes?></div></div>
            </div>
            <!--block-sale-end-->
            <? } ?>

            <? if( ($i == 3 || $i == 11 || $i == 14) && ( $key>=5 || $key=3 ) ) { ?>
             <!--block-end-->
            <div class="block-advertising" >
                <img src="/mymeat/img/reklama.jpg">
                <h2>РЕКЛАМА</h2>
            </div>
            <!--block-start-->
            <? }  $i++; 
         }  ?>    

</div>

<script>
$('body').on('click', '.close', function() {
    window.open("http://kairat.zu/recipe","_self");
});        
</script>>

</div>
</section>
</body>
</html>