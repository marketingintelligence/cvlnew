<div class="main-menu">
        <div class="main-menu-item">
            <div class="main-circle" id="menu-item-1">
                <span>Морская</span>
                <img src="/mymeat/img/fish/fish.png">
            </div>
            <div class="dropdown" id="dropdown-1">
                <ul>
                    <li><a data-id="1-1">Копченая</a></li>
                    <li><a data-id="1-2">Вареная</a></li>
                    <li><a data-id="1-3">Жареная</a></li>

                    <li><a data-id="1-4">Запеченная</a></li>
                    <li><a data-id="1-5">На пару</a></li>
                    <li><a data-id="1-6">Вяленная</a></li>

                    <li><a data-id="1-7">Сушеная</a></li>
                    <li><a data-id="1-8">Тушеная</a></li>
                    <li><a data-id="1-9">На огне</a></li>

                    <li><a data-id="1-10">Гриль</a></li>
                    <li><a data-id="1-11">Маринады</a></li>
                </ul>
            </div>
        </div>
        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <div class="main-circle" id="menu-item-2">
                <span>Речная</span>
                <img src="/mymeat/img/fish/fish2.png">
            </div>
            <div class="dropdown" id="dropdown-2">
                <ul>
                    <li><a data-id="2-1">Копченая</a></li>
                    <li><a data-id="2-2">Вареная</a></li>
                    <li><a data-id="2-3">Жареная</a></li>

                    <li><a data-id="2-4">Запеченная</a></li>
                    <li><a data-id="2-5">На пару</a></li>
                    <li><a data-id="2-6">Вяленная</a></li>

                    <li><a data-id="2-7">Сушеная</a></li>
                    <li><a data-id="2-8">Тушеная</a></li>
                    <li><a data-id="2-9">На огне</a></li>

                    <li><a data-id="2-10">Гриль</a></li>
                    <li><a data-id="2-11">Маринады</a></li>
                </ul>
            </div>
        </div>

        <div class="center-circle"><div class="circle"></div></div>
        <div class="main-menu-item">
            <div class="main-circle" id="menu-item-3">
                <span>Море-продукты</span>
                <img src="/mymeat/img/fish/more.png">
            </div>
            <div class="dropdown" id="dropdown-3">
                <ul>
                    <li><a data-id="3-1">Копченая</a></li>
                    <li><a data-id="3-2">Вареная</a></li>
                    <li><a data-id="3-3">Жареная</a></li>

                    <li><a data-id="3-4">Запеченная</a></li>
                    <li><a data-id="3-5">На пару</a></li>
                    <li><a data-id="3-6">Вяленная</a></li>

                    <li><a data-id="3-7">Сушеная</a></li>
                    <li><a data-id="3-8">Тушеная</a></li>
                    <li><a data-id="3-9">На огне</a></li>

                    <li><a data-id="3-10">Гриль</a></li>
                    <li><a data-id="3-11">Маринады</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="section-r">
    <img src="mymeat/img/meat-rightbg.png" class="meat-rightbg2">
    <img src="mymeat/img/meat-leftbg.png" class="meat-leftbg2">
    <div class="box"><h1 class="title">Последние рецепты с рыбой</h1></div>
    <div class="box flex2">
        <div class="left-menu">
            <div class="left-menu-ul">
                <ul>
                    <li class="title">Видео рецепты из рыб</li>
                    <a id="1"><li>Салаты</li></a>
                    <a id="2"><li>Первые блюда</li></a>
                    <a id="3"><li>Вторые блюда</li></a>
                    <a id="4"><li>Завтрак</li></a>
                    <a id="5"><li>Обед</li></a>
                    <a id="6"><li>Ужин</li></a>
                    <a id="7"><li>Супы</li></a>
                    <a id="8"><li>Холодные блюда</li></a>
                    <a id="9"><li>Горячие блюда</li></a>
                    <a id="10"><li>Закуски</li></a>
                    <a id="11"><li>Соусы</li></a>
                    <a id="12"><li>Сервировка</li></a>
                    <a id="13"><li>Заготовки</li></a>
                    <a id="14"><li>Гарниры</li></a>
                    <a id="15"><li>Напитки</li></a>
                    <a id="16"><li>Что приготовить?</li></a>
                </ul></div>
        </div>
        <div class="box-content">
            <div class="section-items">
                <div class="recipe-part active">
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
               <a href="/fish/<?=$model1->subFishCategory->url_text?>/<?=$value->url_text?>/"> 
                <div class="click-block"  data-id="<?=$i?>">
                    <div class="block-img">
                        <?$img = json_decode($value->image, true);?>
                        <img src="/upload/Recipe/tm/<?=$img[0];?>">
                    </div>
                    <div class="block-text">
                        <h3>
                            <?
                            $text = $value->name_text;
                            $max_lengh = 50;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                        </h3>
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
          
            <? if( $i == 1 ) { ?>
            <!--book-start-->
            <div class="block-journal">
                <div class="bb-custom-wrapper">
                    <nav>
                        <a id="bb-nav-prev" href="#" class="left">Назад</a>
                        <a id="bb-nav-next" href="#" class="right">Далее</a>
                    </nav>
                    <div id="bb-bookblock" class="bb-bookblock">
                        <? foreach( $model as $key => $value ) { 
                            if( $key!=0 && $key<5 ) {
                         ?>   
                        <!--first-page-->
                        <div class="bb-item" data-id="1">
                         <a href="/recipe/<?=$value->parentCategory->url_text?>/<?=$value->url_text?>/"> 
                            <div class="bb-custom-firstpage">
                                <div class="journal-img">
                                     <?$img = json_decode($value->image, true);?>
                                     <img src="/upload/Recipe/full/<?=$img[0];?>">
                                </div>
                                <h3>
                                    <?
                                    $text = $value->name_text;
                                    $max_lengh = 40;
                                    if(mb_strlen($text, "UTF-8") > $max_lengh) {
                                    $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                                    $text_explode = explode(" ", $text_cut);
                                    unset($text_explode[count($text_explode) - 1]);
                                    $text_implode = implode(" ", $text_explode); ?>
                                    <?=$text_implode."...";?>
                                    <?} else { ?> <?=$text;?>
                                    <?  }   ?>
                                </h3>
                                <div class="block-like">
                                    <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;
                                        <?=$value->views_int?></div>
                                    <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp; <?=$value->comments_int?></div>
                                    <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;
                                        <?=$value->likes?></div>
                                </div>
                            </div>
                            <div class="bb-custom-side">
                                <p><?=$value->short_bigtext;?></p>
                            </div>
                        </a>
                        </div>
                        <!--first-page-end-->
                        <? }  
                    }?>
                    </div>
                </div>
            </div>
            <!--book-end-->
            <? } ?>

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
                            <h3>
                            <?
                            $text = $value->name_text;
                            $max_lengh = 50;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                            </h3>
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
                        <h3>
                            <?
                            $text = $value->name_text;
                            $max_lengh = 50;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                        </h3>
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

            <? }  $i++; 
         }  ?>    
</div>
</div>
</div>

<div class="box">
        <div class="section-items"><h2 class="title2">Рецепты наших подписчиков</h2></div>
        <div class="section-items">

        <!--block-advertising-start-->
        <div class="block-advertising" >
            <img src="mymeat/img/reklama.jpg">
            <h2>РЕКЛАМА </h2>
        </div>
        <!--block-advertising-end-->

        <!--block-start-->
            <div class="block">
               <a href="/recipe/<?=$modelrec[0]->subFishCategory->url_text?>/<?=$value->url_text?>/"> 
                <div class="click-block"  data-id="<?=$i?>">
                    <div class="block-img">
                        <?  $img = json_decode($modelrec[0]->image, true);  ?>
                        <img src="/upload/Recipe/tm/<?=$img[0]?>">
                    </div>
                    <div class="block-text">
                        <h3>
                            <?
                            $text = $modelrec[0]->name_text;
                            $max_lengh = 50;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                        </h3>
                        <span>
                        <?
                            $text = $modelrec[0]->short_bigtext;
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
                    <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;<?=$modelrec[0]->views_int?></div>
                    <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                        <?=$modelrec[0]->comments_int?></div>
                    <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;<?=$modelrec[0]->likes?></div>
                 </div>
            </div>
            <!--block-end-->

              <!--block-borderimg-start-->
            <div class="block-borderimg">
                <!--page-1-->
                <div class="borderimg-page active" id="b-page-1-1">
                    <a href="/recipe/<?=$modelrec[1]->parentCategory->url_text?>/<?=$modelrec[1]->url_text?>/"> 
                    <div class="click-block" data-id="<?=$i?>">
                        <div class="block-img">
                        <?$img = json_decode($modelrec[1]->image, true);?>
                        <img src="/upload/Recipe/full/<?=$img[1];?>">
                        </div>
                        <div class="block-text">
                            <h3>
                            <?
                            $text = $modelrec[1]->name_text;
                            $max_lengh = 50;
                            if(mb_strlen($text, "UTF-8") > $max_lengh) {
                            $text_cut = mb_substr($text, 0, $max_lengh, "UTF-8");
                            $text_explode = explode(" ", $text_cut);
                            unset($text_explode[count($text_explode) - 1]);
                            $text_implode = implode(" ", $text_explode); ?>
                            <?=$text_implode."...";?>
                            <?} else { ?> <?=$text;?>
                            <?  }   ?>
                            </h3>
                            <span>
                                <?
                                $text = $modelrec[1]->short_bigtext;
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
                        <div class="block-like-box"><i class="fa fa-eye fa-lg"></i>&nbsp;<?=$modelrec[1]->views_int?></div>
                        <div class="block-like-box like-box-border"><i class="fa fa-comment fa-lg"></i>&nbsp;
                            <?=$modelrec[1]->comments_int?></div>
                        <div class="block-like-box"><i class="fa fa-heart fa-lg"></i>&nbsp;<?=$modelrec[1]->likes?></div>
                    </div>
                </div>
            </div>
            <!--block-borderimg-end-->
           
            <!--block-advertising-start-->
            <div class="block-advertising" >
                <img src="mymeat/img/reklama.jpg">
                <h2>РЕКЛАМА </h2>
            </div>
            <!--block-advertising-end-->

</div>
</div>
</section>
    